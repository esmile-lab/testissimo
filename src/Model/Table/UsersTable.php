<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\SchoolsTable|\Cake\ORM\Association\BelongsTo $Schools
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Schools', [
            'foreignKey' => 'school_id',
            'conditions' => ['Schools.is_deleted' => 0],
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
            ->scalar('mail1')
            ->maxLength('mail1', 128, '128文字以内で入力してください')
            ->requirePresence('mail1', 'create')
            ->notEmpty('mail1');

        $validator
            ->scalar('password')
            ->maxLength('password', 16)
            ->lengthBetween('mail1', [8, 16], '8文字以上16文字以内で入力してください')
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 32)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 32)
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->scalar('last_kana')
            ->maxLength('last_kana', 32)
            ->requirePresence('last_kana', 'create')
            ->notEmpty('last_kana');

        $validator
            ->scalar('first_kana')
            ->maxLength('first_kana', 32)
            ->requirePresence('first_kana', 'create')
            ->notEmpty('first_kana');

        $validator
            ->scalar('mail2')
            ->maxLength('mail2', 128)
            ->requirePresence('mail2', 'create')
            ->allowEmpty('mail2');

        $validator
            ->scalar('tel1')
            ->maxLength('tel1', 16)
            ->requirePresence('tel1', 'create')
            ->allowEmpty('tel1');

        $validator
            ->scalar('tel2')
            ->maxLength('tel2', 16)
            ->requirePresence('tel2', 'create')
            ->allowEmpty('tel2');

        $validator
            ->integer('sex')
            ->allowEmpty('sex');

        $validator
            ->date('birthday')
            ->allowEmpty('birthday');

        $validator
            ->integer('graduation_year')
            ->allowEmpty('graduation_year');

        $validator
            ->integer('graduation_month')
            ->allowEmpty('graduation_month');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 8)
            ->requirePresence('zip', 'create')
            ->allowEmpty('zip');

        $validator
            ->scalar('prefecture')
            ->maxLength('prefecture', 8)
            ->requirePresence('prefecture', 'create')
            ->notEmpty('prefecture');

        $validator
            ->scalar('city')
            ->maxLength('city', 32)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('building')
            ->maxLength('building', 64)
            ->requirePresence('building', 'create')
            ->notEmpty('building');

        $validator
            ->integer('auth')
            ->requirePresence('auth', 'create')
            ->notEmpty('auth');

        $validator
            ->integer('is_mailing')
            ->requirePresence('is_mailing', 'create')
            ->notEmpty('is_mailing');

        $validator
            ->integer('is_scouted')
            ->requirePresence('is_scouted', 'create')
            ->notEmpty('is_scouted');

        $validator
            ->integer('is_added')
            ->requirePresence('is_added', 'create')
            ->notEmpty('is_added');

        $validator
            ->integer('is_deleted')
            ->requirePresence('is_deleted', 'create')
            ->notEmpty('is_deleted');

        $validator
            ->dateTime('last_login_at')
            ->allowEmpty('last_login_at');

        $validator
            ->integer('create_user')
            ->allowEmpty('create_user');

        $validator
            ->dateTime('create_at')
            ->allowEmpty('create_at');

        $validator
            ->integer('update_user')
            ->allowEmpty('update_user');

        $validator
            ->dateTime('update_at')
            ->allowEmpty('update_at');

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
       // $rules->add($rules->existsIn(['school_id'], 'Schools'));

        return $rules;
    }
}
