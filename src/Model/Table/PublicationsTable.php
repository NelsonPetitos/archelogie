<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Publications Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Sources
 * @property \Cake\ORM\Association\BelongsToMany $Auteurs
 * @property \Cake\ORM\Association\BelongsToMany $Datations
 *
 * @method \App\Model\Entity\Publication get($primaryKey, $options = [])
 * @method \App\Model\Entity\Publication newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Publication[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Publication|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Publication patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Publication[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Publication findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PublicationsTable extends Table
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

        $this->table('publications');
        $this->displayField('full_name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id'
        ]);
        $this->belongsToMany('Auteurs', [
            'foreignKey' => 'publication_id',
            'targetForeignKey' => 'auteur_id',
            'joinTable' => 'auteurs_publications',
            'sort' => ['Auteurs.name' => 'ASC']
        ]);
        $this->belongsToMany('Datations', [
            'foreignKey' => 'publication_id',
            'targetForeignKey' => 'datation_id',
            'joinTable' => 'datations_publications'
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
            ->integer('annee')
            ->allowEmpty('annee');

        $validator
            ->allowEmpty('title');

        $validator
            ->allowEmpty('reference');

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
        $rules->add($rules->existsIn(['source_id'], 'Sources'));

        return $rules;
    }

    public function getDisplayfield(){
        return $this->_displayField;
    }
}
