<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use SoftDelete\Model\Table\SoftDeleteTrait;

/**
 * Users Model
 */
class UsersTable extends Table
{
    /* 論理削除設定 */
    use SoftDeleteTrait;
    protected $softDeleteField = 'deleted';

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('type', 'valid', ['rule' => 'numeric'])
            ->requirePresence('type', 'create')
            ->notEmpty('type')
            ->add('affiliation', 'valid', ['rule' => 'numeric'])
            ->requirePresence('affiliation', 'create')
            ->notEmpty('affiliation')
            ->add('employment', 'valid', ['rule' => 'numeric'])
            ->requirePresence('employment', 'create')
            ->notEmpty('employment')
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email')
            ->requirePresence('loginid', 'create')
            ->notEmpty('loginid')
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            //->requirePresence('files', 'create')
            ->allowEmpty('files')
            ->allowEmpty('filepath')
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
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
