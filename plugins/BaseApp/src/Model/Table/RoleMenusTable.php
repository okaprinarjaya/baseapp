<?php
namespace BaseApp\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Cache\Cache;
use Cake\ORM\TableRegistry;

/**
 * RoleMenus Model
 *
 * @property \BaseApp\Model\Table\MenusTable|\Cake\ORM\Association\BelongsTo $Menus
 *
 * @method \BaseApp\Model\Entity\RoleMenu get($primaryKey, $options = [])
 * @method \BaseApp\Model\Entity\RoleMenu newEntity($data = null, array $options = [])
 * @method \BaseApp\Model\Entity\RoleMenu[] newEntities(array $data, array $options = [])
 * @method \BaseApp\Model\Entity\RoleMenu|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \BaseApp\Model\Entity\RoleMenu|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \BaseApp\Model\Entity\RoleMenu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \BaseApp\Model\Entity\RoleMenu[] patchEntities($entities, array $data, array $options = [])
 * @method \BaseApp\Model\Entity\RoleMenu findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoleMenusTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('role_menus');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
      $validator
        ->scalar('role')
        ->requirePresence('role', 'create')
        ->notEmpty('role');

      $validator
        ->scalar('menu_id')
        ->requirePresence('menu_id', 'create')
        ->notEmpty('menu_id');

      return $validator;
    }

    public function fetchMenus()
    {
      $menus_cache = Cache::read('__MENUS__', '_myappcache_');
      if ($menus_cache === false) {
        $role = $_SESSION['Auth']['User']['role'];
        $role_menus_table = TableRegistry::getTableLocator()->get('BaseApp.RoleMenus');
        $menus_table = TableRegistry::getTableLocator()->get('BaseApp.Menus');

        $ids_fetch = $role_menus_table->find(
          'all',
          ['conditions' => ['RoleMenus.role' => 'user', 'deleted' => 'N']]
        );
        $ids = \Cake\Utility\Hash::extract($ids_fetch->toArray(), '{n}.menu_id');
        $menus_fetch = $menus_table->find(
          'threaded',
          ['conditions' => ['id IN' => $ids], 'order' => ['Menus.rght' => 'ASC']]
        );
        $menus = $menus_fetch->toArray();

        Cache::write('__MENUS__', json_encode($menus), '_myappcache_');
      }
    }
}
