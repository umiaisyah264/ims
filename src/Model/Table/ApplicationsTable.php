<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Applications Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SemestersTable&\Cake\ORM\Association\BelongsTo $Semesters
 *
 * @method \App\Model\Entity\Application newEmptyEntity()
 * @method \App\Model\Entity\Application newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Application> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Application get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Application findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Application patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Application> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Application|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Application saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Application>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Application>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Application>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Application> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Application>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Application>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Application>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Application> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ApplicationsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('applications');
        $this->setDisplayField('company_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Semesters', [
            'foreignKey' => 'semester_id',
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
            ->notEmptyString('user_id');

        $validator
            ->scalar('company_name')
            ->maxLength('company_name', 50)
            ->requirePresence('company_name', 'create')
            ->notEmptyString('company_name');

        $validator
            ->scalar('street_1')
            ->maxLength('street_1', 50)
            ->requirePresence('street_1', 'create')
            ->notEmptyString('street_1');

        $validator
            ->scalar('street_2')
            ->maxLength('street_2', 50)
            ->requirePresence('street_2', 'create')
            ->notEmptyString('street_2');

        $validator
            ->integer('postcode')
            ->requirePresence('postcode', 'create')
            ->notEmptyString('postcode');

        $validator
            ->scalar('city')
            ->maxLength('city', 50)
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 50)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('pic_name')
            ->maxLength('pic_name', 50)
            ->requirePresence('pic_name', 'create')
            ->notEmptyString('pic_name');

        $validator
            ->scalar('pic_email')
            ->maxLength('pic_email', 50)
            ->requirePresence('pic_email', 'create')
            ->notEmptyString('pic_email');

        $validator
            ->integer('semester_id')
            ->notEmptyString('semester_id');

        $validator
            ->integer('status')
            ->notEmptyString('status');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['semester_id'], 'Semesters'), ['errorField' => 'semester_id']);

        return $rules;
    }
}
