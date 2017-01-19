<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materiels Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Datations
 *
 * @method \App\Model\Entity\Materiel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Materiel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Materiel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Materiel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Materiel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Materiel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Materiel findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MaterielsTable extends Table
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

        $this->table('materiels');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Datations', [
            'foreignKey' => 'materiel_id',
            'targetForeignKey' => 'datation_id',
            'joinTable' => 'datations_materiels'
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
