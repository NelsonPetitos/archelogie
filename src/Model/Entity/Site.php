<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Site Entity
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property float $latitude
 * @property float $longitude
 * @property string $contry
 * @property string $province
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $datation_count
 * @property int $source_id
 *
 * @property \App\Model\Entity\Datation[] $datations
 */
class Site extends Entity
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
