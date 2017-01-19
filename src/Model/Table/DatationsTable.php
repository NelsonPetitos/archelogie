<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Datations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Laboratoires
 * @property \Cake\ORM\Association\BelongsTo $Sites
 * @property \Cake\ORM\Association\BelongsTo $Sources
 * @property \Cake\ORM\Association\BelongsToMany $Materiels
 * @property \Cake\ORM\Association\BelongsToMany $Objets
 * @property \Cake\ORM\Association\BelongsToMany $Publications
 *
 * @method \App\Model\Entity\Datation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Datation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Datation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Datation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Datation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Datation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Datation findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\CounterCacheBehavior
 */
class DatationsTable extends Table
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

        $this->table('datations');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('CounterCache', ['Laboratoires' => ['datation_count'], 'Sites' => ['datation_count']]);

        $this->belongsTo('Laboratoires', [
            'foreignKey' => 'laboratoire_id'
        ]);
        $this->belongsTo('Sites', [
            'foreignKey' => 'site_id'
        ]);
        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Materiels', [
            'foreignKey' => 'datation_id',
            'targetForeignKey' => 'materiel_id',
            'joinTable' => 'datations_materiels'
        ]);
        $this->belongsToMany('Objets', [
            'foreignKey' => 'datation_id',
            'targetForeignKey' => 'objet_id',
            'joinTable' => 'datations_objets'
        ]);
        $this->belongsToMany('Publications', [
            'foreignKey' => 'datation_id',
            'targetForeignKey' => 'publication_id',
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
            ->allowEmpty('type_datation');

        $validator
            ->allowEmpty('code_reference');

        $validator
            ->allowEmpty('date_bp');

        $validator
            ->integer('annee_prise_echantillon')
            ->allowEmpty('annee_prise_echantillon');

        $validator
            ->allowEmpty('discipline');

        $validator
            ->allowEmpty('detail_site_recolte');

        $validator
            ->allowEmpty('erreur_standard');

        $validator
            ->allowEmpty('culture_associee');

        $validator
            ->allowEmpty('horizon_culturel');

        $validator
            ->allowEmpty('numero_structure');

        $validator
            ->allowEmpty('date_calibree');

        $validator
            ->allowEmpty('commentaire');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules){
        $rules->add($rules->existsIn(['laboratoire_id'], 'Laboratoires'));
        $rules->add($rules->existsIn(['site_id'], 'Sites'));
        $rules->add($rules->existsIn(['source_id'], 'Sources'));

        return $rules;
    }

    public function getDisplayfield(){
        return $this->_displayField;
    }

}
