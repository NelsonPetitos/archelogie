<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Laboratoires Model
 *
 * @property \Cake\ORM\Association\HasMany $Datations
 *
 * @method \App\Model\Entity\Laboratoire get($primaryKey, $options = [])
 * @method \App\Model\Entity\Laboratoire newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Laboratoire[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Laboratoire|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Laboratoire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Laboratoire[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Laboratoire findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LaboratoiresTable extends Table
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

        $this->table('laboratoires');
        $this->displayField('code_laboratoire');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Datations', [
            'foreignKey' => 'laboratoire_id'
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
            ->allowEmpty('code_laboratoire');

        $validator
            ->allowEmpty('description');

        $validator
            ->integer('datation_count')
            ->allowEmpty('datation_count');

        return $validator;
    }

    public function getDisplayfield(){
        return $this->_displayField;
    }
}
