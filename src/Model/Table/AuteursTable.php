<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Auteurs Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Publications
 *
 * @method \App\Model\Entity\Auteur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Auteur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Auteur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Auteur|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Auteur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Auteur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Auteur findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AuteursTable extends Table
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

        $this->table('auteurs');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Publications', [
            'foreignKey' => 'auteur_id',
            'targetForeignKey' => 'publication_id',
            'joinTable' => 'auteurs_publications'
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

        return $validator;
    }

    public function getDisplayfield(){
        return $this->_displayField;
    }
}
