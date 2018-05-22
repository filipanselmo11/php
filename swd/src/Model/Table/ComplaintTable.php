<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Complaint Model
 *
 * @method \App\Model\Entity\Complaint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Complaint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Complaint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Complaint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Complaint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Complaint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Complaint findOrCreate($search, callable $callback = null, $options = [])
 */
class ComplaintTable extends Table
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

        $this->setTable('complaint');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmpty('id_user');

        $validator
            ->scalar('neighborhood')
            ->maxLength('neighborhood', 255)
            ->requirePresence('neighborhood', 'create')
            ->notEmpty('neighborhood');

        $validator
            ->scalar('street')
            ->maxLength('street', 255)
            ->requirePresence('street', 'create')
            ->notEmpty('street');

        $validator
            ->integer('numb')
            ->requirePresence('numb', 'create')
            ->notEmpty('numb');

        $validator
            ->scalar('description_complaint')
            ->allowEmpty('description_complaint');

        return $validator;
    }
}
