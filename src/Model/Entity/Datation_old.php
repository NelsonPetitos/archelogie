<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Datation Entity
 *
 * @property int $id
 * @property string $type_datation
 * @property string $code_reference
 * @property int $date_bp
 * @property int $annee_prise_echantillon
 * @property string $discipline
 * @property int $laboratoire_id
 * @property int $site_id
 * @property string $detail_site_recolte
 * @property int $erreur_standard
 * @property string $culture_associee
 * @property string $horizon_culturel
 * @property string $numero_structure
 * @property string $date_calibree
 * @property string $commentaire
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $source_id
 *
 * @property \App\Model\Entity\Laboratoire $laboratoire
 * @property \App\Model\Entity\Site $site
 * @property \App\Model\Entity\Materiel[] $materiels
 * @property \App\Model\Entity\Objet[] $objets
 * @property \App\Model\Entity\Publication[] $publications
 */
class Datation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
