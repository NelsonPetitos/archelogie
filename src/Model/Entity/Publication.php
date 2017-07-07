<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Publication Entity
 *
 * @property int $id
 * @property int $annee
 * @property string $title
 * @property string $reference
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $source_id
 *
 * @property \App\Model\Entity\Auteur[] $auteurs
 * @property \App\Model\Entity\Datation[] $datations
 */
class Publication extends Entity
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

    /**
     * @return string
     */
    protected function _getFullName()
    {
        return $this->_properties['annee']. ' - ' .$this->_properties['title'].' - '.$this->_properties['reference'];
    }
}
