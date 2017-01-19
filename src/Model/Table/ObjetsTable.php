<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Objets Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Datations
 *
 * @method \App\Model\Entity\Objet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Objet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Objet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Objet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Objet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Objet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Objet findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ObjetsTable extends Table
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

        $this->table('objets');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Datations', [
            'foreignKey' => 'objet_id',
            'targetForeignKey' => 'datation_id',
            'joinTable' => 'datations_objets'
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
            ->allowEmpty('name');

        $validator
            ->allowEmpty('categorie');

        return $validator;
    }

    public function getDisplayfield(){
        return $this->_displayField;
    }
}
