<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
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

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id_utilizador');
        $this->setPrimaryKey('id_utilizador');
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
            ->integer('id_utilizador')
            ->allowEmptyString('id_utilizador', null, 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 250)
            ->requirePresence('username', 'create')
            ->notEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 250)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('role')
            ->maxLength('role', 20)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 250)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->integer('idade')
            ->requirePresence('idade', 'create')
            ->notEmptyString('idade');

        $validator
            ->scalar('morada')
            ->maxLength('morada', 250)
            ->requirePresence('morada', 'create')
            ->notEmptyString('morada');

        $validator
            ->scalar('profissao')
            ->maxLength('profissao', 250)
            ->requirePresence('profissao', 'create')
            ->notEmptyString('profissao');

        $validator
            ->scalar('formacao')
            ->maxLength('formacao', 250)
            ->requirePresence('formacao', 'create')
            ->notEmptyString('formacao');

        $validator
            ->scalar('genero')
            ->maxLength('genero', 250)
            ->requirePresence('genero', 'create')
            ->notEmptyString('genero');

        $validator
            ->scalar('bio')
            ->maxLength('bio', 250)
            ->requirePresence('bio', 'create')
            ->notEmptyString('bio');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    /*public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }*/
}
