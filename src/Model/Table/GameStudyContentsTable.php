<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * GameStudyContents Model
 *
 * @property \App\Model\Table\GameStudyContentsTable|\Cake\ORM\Association\BelongsTo $GameStudyCategories
 *
 * @method \App\Model\Entity\GameStudyContent get($primaryKey, $options = [])
 * @method \App\Model\Entity\GameStudyContent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GameStudyContent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GameStudyContent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GameStudyContent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GameStudyContent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GameStudyContent findOrCreate($search, callable $callback = null, $options = [])
 */
class GameStudyContentsTable extends Table
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

        $this->setTable('game_study_contents');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('GameStudyCategories', [
            'foreignKey' => 'game_study_category_id',
            'conditions' => ['GameStudyCategories.is_deleted' => 0],
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
            ->integer('game_study_category_id')
            ->notEmpty('game_study_category_id', 'create');

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
