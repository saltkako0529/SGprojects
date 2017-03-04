<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProjectOutsourcings Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Projects
 * @property \Cake\ORM\Association\BelongsTo $Outsourcings
 *
 * @method \App\Model\Entity\ProjectOutsourcing get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProjectOutsourcing newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProjectOutsourcing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProjectOutsourcing|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectOutsourcing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectOutsourcing[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectOutsourcing findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectOutsourcingsTable extends Table
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

        $this->table('project_outsourcings');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projects', [
            'foreignKey' => 'projects_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Outsourcings', [
            'foreignKey' => 'outsourcings_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

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
        $rules->add($rules->existsIn(['projects_id'], 'Projects'));
        $rules->add($rules->existsIn(['outsourcings_id'], 'Outsourcings'));

        return $rules;
    }
}
