<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProjectLists Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\ProjectList get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProjectList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProjectList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProjectList|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectList findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectListsTable extends Table
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

        $this->table('project_lists');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        $validator
            ->integer('priority')
            ->requirePresence('priority', 'create')
            ->notEmpty('priority');

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
