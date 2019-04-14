<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * BusinessStudyContents Model
 *
 * @property \App\Model\Table\BusinessStudyContentsTable|\Cake\ORM\Association\BelongsTo $BusinessStudyCategories
 *
 * @method \App\Model\Entity\BusinessStudyContent get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessStudyContent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BusinessStudyContent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessStudyContent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessStudyContent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessStudyContent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessStudyContent findOrCreate($search, callable $callback = null, $options = [])
 */
class BusinessStudyContentsTable extends Table
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

        $this->setTable('business_study_contents');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('BusinessStudyCategories', [
            'foreignKey' => 'business_study_category_id',
            'conditions' => ['BusinessStudyCategories.is_deleted' => 0],
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
            ->integer('business_study_category_id')
            ->notEmpty('business_study_category_id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 64)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('sub_name')
            ->maxLength('sub_name', 128)
            ->requirePresence('sub_name', 'create')
            ->notEmpty('sub_name');

        $validator
            ->integer('level')
            ->requirePresence('level', 'create')
            ->notEmpty('level');

        $validator
            ->integer('order_num')
            ->requirePresence('order_num', 'create')
            ->notEmpty('order_num');

        $validator
            ->integer('file_type')
            ->allowEmpty('file_type');

        $validator
            ->integer('is_deleted')
            ->requirePresence('is_deleted', 'create')
            ->notEmpty('is_deleted');

        $validator
            ->integer('create_manager')
            ->allowEmpty('create_manager');

        $validator
            ->integer('create_at')
            ->allowEmpty('create_at');

        $validator
            ->integer('update_manager')
            ->allowEmpty('update_manager');

        $validator
            ->integer('update_at')
            ->allowEmpty('update_at');

        return $validator;
    }
}
