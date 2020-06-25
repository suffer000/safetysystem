<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MDepartments Model
 *
 * @method \App\Model\Entity\MDepartment newEmptyEntity()
 * @method \App\Model\Entity\MDepartment newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MDepartment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MDepartment get($primaryKey, $options = [])
 * @method \App\Model\Entity\MDepartment findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MDepartment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MDepartment[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MDepartment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MDepartment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MDepartment[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MDepartment[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MDepartment[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MDepartment[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MDepartmentsTable extends Table
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

        $this->setTable('m_departments');
        $this->setDisplayField('department_id');
        $this->setPrimaryKey('department_id');
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
            ->integer('department_id')
            ->allowEmptyString('department_id', null, 'create');

        $validator
            ->scalar('department_name')
            ->maxLength('department_name', 255)
            ->requirePresence('department_name', 'create')
            ->notEmptyString('department_name');

        $validator
            ->scalar('department_description')
            ->maxLength('department_description', 255)
            ->requirePresence('department_description', 'create')
            ->notEmptyString('department_description');

        $validator
            ->dateTime('create_time')
            ->requirePresence('create_time', 'create')
            ->notEmptyDateTime('create_time');

        $validator
            ->dateTime('update_time')
            ->allowEmptyDateTime('update_time');

        $validator
            ->boolean('deleted')
            ->requirePresence('deleted', 'create')
            ->notEmptyString('deleted');

        return $validator;
    }
}
