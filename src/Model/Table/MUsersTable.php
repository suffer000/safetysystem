<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MUsers Model
 *
 * @property \App\Model\Table\MDepartmentsTable&\Cake\ORM\Association\BelongsTo $MDepartments
 * @property \App\Model\Table\MAreasTable&\Cake\ORM\Association\BelongsTo $MAreas
 *
 * @method \App\Model\Entity\MUser newEmptyEntity()
 * @method \App\Model\Entity\MUser newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\MUser findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MUser[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MUser[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MUser[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MUser[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MUser[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MUsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('m_users');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey('user_id');

        $this->belongsTo('MDepartments', [
            'foreignKey' => 'department_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('MAreas', [
            'foreignKey' => 'area_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id', null, 'create');

        $validator
            ->scalar('user_name')
            ->maxLength('user_name', 255)
            ->requirePresence('user_name', 'create')
            ->notEmptyString('user_name');

        $validator
            ->integer('user_permission')
            ->requirePresence('user_permission', 'create')
            ->notEmptyString('user_permission');

        $validator
            ->scalar('user_address')
            ->maxLength('user_address', 255)
            ->requirePresence('user_address', 'create')
            ->notEmptyString('user_address');

        $validator
            ->scalar('user_login_name')
            ->maxLength('user_login_name', 255)
            ->requirePresence('user_login_name', 'create')
            ->notEmptyString('user_login_name');

        $validator
            ->scalar('user_password')
            ->maxLength('user_password', 255)
            ->requirePresence('user_password', 'create')
            ->notEmptyString('user_password');

        $validator
            ->scalar('user_memo')
            ->maxLength('user_memo', 255)
            ->allowEmptyString('user_memo');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmptyString('created_by');

        $validator
            ->dateTime('create_time')
            ->requirePresence('create_time', 'create')
            ->notEmptyDateTime('create_time');

        $validator
            ->integer('updated_by')
            ->allowEmptyString('updated_by');

        $validator
            ->dateTime('update_time')
            ->allowEmptyDateTime('update_time');

        $validator
            ->boolean('deleted')
            ->requirePresence('deleted', 'create')
            ->notEmptyString('deleted');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['department_id'], 'MDepartments'));
        $rules->add($rules->existsIn(['area_id'], 'MAreas'));

        return $rules;
    }
}
