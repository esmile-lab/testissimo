<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * GameCourseCategories Model
 *
 * @property \App\Model\Table\GameCourseCategoriesTable|\Cake\ORM\Association\HasMany $GameStudyCategories
 *
 * @method \App\Model\Entity\GameCourseCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\GameCourseCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GameCourseCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GameCourseCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GameCourseCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GameCourseCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GameCourseCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class GameCourseCategoriesTable extends Table
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

        $this->setTable('game_course_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('GameStudyCategories', [
            'foreignKey' => 'game_course_category_id',
            'conditions' => ['GameStudyCategories.is_deleted' => 0]
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
            ->maxLength('name', 64)
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
