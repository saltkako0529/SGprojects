<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Outsourcings Model
 *
 * @method \App\Model\Entity\Outsourcing get($primaryKey, $options = [])
 * @method \App\Model\Entity\Outsourcing newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Outsourcing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Outsourcing|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Outsourcing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Outsourcing[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Outsourcing findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OutsourcingsTable extends Table
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

        $this->table('outsourcings');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('postalcode');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('tel');

        $validator
            ->allowEmpty('remarks');

        return $validator;
    }
}
