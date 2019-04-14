<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * BusinessStudyCategories Model
 *
 * @property \App\Model\Table\BusinessStudyCategoriesTable|\Cake\ORM\Association\HasMany $BusinessStudyContents
 * @property \App\Model\Table\BusinessStudyCategoriesTable|\Cake\ORM\Association\BelongsTo $BusinessCourseCategories
 *
 * @method \App\Model\Entity\BusinessStudyCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessStudyCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BusinessStudyCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessStudyCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessStudyCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessStudyCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessStudyCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class BusinessStudyCategoriesTable extends Table
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

        $this->setTable('business_study_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey(['id', 'business_course_category_id']);

        $this->hasMany('BusinessStudyContents', [
            'foreignKey' => 'business_study_category_id',
            'conditions' => ['BusinessStudyContents.is_deleted' => 0]
        ]);

        $this->belongsTo('BusinessCourseCategories', [
            'foreignKey' => 'business_course_category_id',
            'conditions' => ['BusinessCourseCategories.is_deleted' => 0],
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
            ->integer('business_course_category_id')
            ->notEmpty('business_course_category_id', 'create');

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
            ->integer('answer_file_type')
            ->allowEmpty('answer_file_type');

        $validator
            ->integer('download_cnt')
            ->requirePresence('download_cnt', 'create')
            ->notEmpty('download_cnt');

        $validator
            ->integer('is_downloaded')
            ->requirePresence('is_downloaded', 'create')
            ->notEmpty('is_downloaded');

        $validator
            ->integer('is_uploaded')
            ->requirePresence('is_uploaded', 'create')
            ->notEmpty('is_uploaded');

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
