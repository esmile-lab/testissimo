<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * BusinessCourseCategories Model
 *
 * @property \App\Model\Table\BusinessCourseCategoriesTable|\Cake\ORM\Association\HasMany $BusinessStudyCategories
 *
 * @method \App\Model\Entity\BusinessCourseCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessCourseCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BusinessCourseCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessCourseCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessCourseCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessCourseCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessCourseCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class BusinessCourseCategoriesTable extends Table
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

        $this->setTable('business_course_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('BusinessStudyCategories', [
            'foreignKey' => 'business_course_category_id',
            'conditions' => ['BusinessStudyCategories.is_deleted' => 0]
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
            ->scalar('name')
            ->maxLength('name', 32)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('order_num')
            ->requirePresence('order_num', 'create')
            ->notEmpty('order_num');

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
