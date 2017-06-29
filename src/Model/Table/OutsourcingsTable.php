<?php
namespace App\Model\Table;

use App\Model\Entity\Outsourcing;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use SoftDelete\Model\Table\SoftDeleteTrait;

/**
 * Outsourcings Model
 */
class OutsourcingsTable extends Table
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->add('deleted', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('deleted')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->allowEmpty('postalcode')
            ->allowEmpty('address')
            ->allowEmpty('tel')
            ->allowEmpty('remarks');

        return $validator;
    }
}
