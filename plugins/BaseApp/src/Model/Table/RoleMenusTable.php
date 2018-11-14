<?php
namespace BaseApp\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

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

      return $validator;
    }
}
