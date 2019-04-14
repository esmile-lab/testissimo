<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * BusinessUploadContents Model
 *
 * @property \App\Model\Table\BusinessUploadContentsTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\BusinessUploadContent get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessUploadContent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BusinessUploadContent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessUploadContent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessUploadContent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessUploadContent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessUploadContent findOrCreate($search, callable $callback = null, $options = [])
 */
class BusinessUploadContentsTable extends Table
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

        $this->setTable('business_upload_contents');
        $this->setDisplayField('name');
        $this->setPrimaryKey(['id', 'user_id', 'business_study_category_id']);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'conditions' => ['Users.is_deleted' => 0],
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
            ->integer('user_id')
            ->allowEmpty('user_id', 'create');

        $validator
            ->integer('business_study_category_id')
            ->allowEmpty('business_study_category_id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 128)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('comment')
            ->allowEmpty('comment');

        $validator
            ->scalar('file_name')
            ->maxLength('file_name', 128)
            ->requirePresence('file_name', 'create')
            ->notEmpty('file_name');

        $validator
            ->integer('file_type')
            ->requirePresence('file_type', 'create')
            ->notEmpty('file_type');

        $validator
            ->integer('is_deleted')
            ->requirePresence('is_deleted', 'create')
            ->notEmpty('is_deleted');

        $validator
            ->integer('create_user')
            ->allowEmpty('create_user');

        $validator
            ->integer('create_at')
            ->allowEmpty('create_at');

        $validator
            ->integer('update_user')
            ->allowEmpty('update_user');

        $validator
            ->integer('update_at')
            ->allowEmpty('update_at');

        $validator
            ->integer('check_status_flg')
            ->allowEmpty('check_status_flg');

        $validator
            ->integer('check_score')
            ->allowEmpty('check_score');

        $validator
            ->scalar('check_comment')
            ->requirePresence('check_comment', 'create')
            ->notEmpty('check_comment');

        $validator
            ->integer('check_answer_flg')
            ->allowEmpty('check_answer_flg');

        $validator
            ->integer('check_manager')
            ->allowEmpty('check_manager');

        $validator
            ->integer('check_at')
            ->allowEmpty('check_at');

        return $validator;
    }
}
