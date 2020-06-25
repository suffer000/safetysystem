<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MAreas Model
 *
 * @method \App\Model\Entity\MArea newEmptyEntity()
 * @method \App\Model\Entity\MArea newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MArea[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MArea get($primaryKey, $options = [])
 * @method \App\Model\Entity\MArea findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MArea patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MArea[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MArea|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MArea saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MArea[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MArea[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MArea[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MArea[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MAreasTable extends Table
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

        $this->setTable('m_areas');
        $this->setDisplayField('area_id');
        $this->setPrimaryKey('area_id');
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
            ->integer('area_id')
            ->allowEmptyString('area_id', null, 'create');

        $validator
            ->scalar('area_name')
            ->maxLength('area_name', 255)
            ->requirePresence('area_name', 'create')
            ->notEmptyString('area_name');

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
