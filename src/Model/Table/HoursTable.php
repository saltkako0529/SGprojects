<?php
namespace App\Model\Table;

use App\Model\Entity\Hour;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hours Model
 */
class HoursTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('hours');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Projects', [
            'foreignKey' => 'projects_id',
            'joinType' => 'INNER'
        ]);
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->add('year', 'valid', ['rule' => 'numeric'])
            ->requirePresence('year', 'create')
            ->notEmpty('year')
            ->add('month', 'valid', ['rule' => 'numeric'])
            ->requirePresence('month', 'create')
            ->notEmpty('month')
            ->add('date', 'valid', ['rule' => 'numeric'])
            ->requirePresence('date', 'create')
            ->notEmpty('date')
            ->add('kind', 'valid', ['rule' => 'numeric'])
            ->requirePresence('kind', 'create')
            ->notEmpty('kind')
            ->add('officer', 'valid', ['rule' => 'numeric'])
            ->requirePresence('officer', 'create')
            ->notEmpty('officer')
            ->requirePresence('hour', 'create')
            ->notEmpty('hour')
            ->add('work', 'valid', ['rule' => 'numeric'])
            ->requirePresence('work', 'create')
            ->notEmpty('work')
            ->add('application', 'valid', ['rule' => 'numeric'])
            ->requirePresence('application', 'create')
            ->notEmpty('application')
            ->add('print', 'valid', ['rule' => 'numeric'])
            ->requirePresence('print', 'create')
            ->notEmpty('print')
            ->allowEmpty('remarks');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['users_id'], 'Users'));
        $rules->add($rules->existsIn(['projects_id'], 'Projects'));
        return $rules;
    }
}
