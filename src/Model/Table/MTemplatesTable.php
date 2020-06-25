<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MTemplates Model
 *
 * @method \App\Model\Entity\MTemplate newEmptyEntity()
 * @method \App\Model\Entity\MTemplate newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MTemplate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MTemplate get($primaryKey, $options = [])
 * @method \App\Model\Entity\MTemplate findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MTemplate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MTemplate[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MTemplate|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MTemplate saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MTemplate[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MTemplate[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MTemplate[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MTemplate[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MTemplatesTable extends Table
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

        $this->setTable('m_templates');
        $this->setDisplayField('template_id');
        $this->setPrimaryKey('template_id');
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
            ->integer('template_id')
            ->allowEmptyString('template_id', null, 'create');

        $validator
            ->scalar('template_title')
            ->maxLength('template_title', 255)
            ->requirePresence('template_title', 'create')
            ->notEmptyString('template_title');

        $validator
            ->scalar('template_text')
            ->maxLength('template_text', 2000)
            ->requirePresence('template_text', 'create')
            ->notEmptyString('template_text');

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
