<?php
namespace BaseApp\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Menus Model
 *
 * @method \BaseApp\Model\Entity\Menu get($primaryKey, $options = [])
 * @method \BaseApp\Model\Entity\Menu newEntity($data = null, array $options = [])
 * @method \BaseApp\Model\Entity\Menu[] newEntities(array $data, array $options = [])
 * @method \BaseApp\Model\Entity\Menu|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \BaseApp\Model\Entity\Menu|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \BaseApp\Model\Entity\Menu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \BaseApp\Model\Entity\Menu[] patchEntities($entities, array $data, array $options = [])
 * @method \BaseApp\Model\Entity\Menu findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class MenusTable extends Table
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

      $this->setTable('menus');
      $this->setDisplayField('title');
      $this->setPrimaryKey('id');

      $this->addBehavior('Timestamp');
      $this->addBehavior('Tree');
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
        ->uuid('id')
        ->allowEmpty('id', 'create');

      $validator
        ->scalar('title')
        ->maxLength('title', 32)
        ->requirePresence('title', 'create')
        ->notEmpty('title');

      return $validator;
    }
}
