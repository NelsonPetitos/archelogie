<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DatationsFixture
 *
 */
class DatationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'type_datation' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'code_reference' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'date_bp' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'annee_prise_echantillon' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'discipline' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'laboratoire_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'site_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'detail_site_recolte' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'erreur_standard' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'culture_associee' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'horizon_culturel' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'numero_structure' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'date_calibree' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'commentaire' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'time', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'time', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'source_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_indexes' => [
            'datations_laboratoire_id' => ['type' => 'index', 'columns' => ['laboratoire_id'], 'length' => []],
            'datations_site_id' => ['type' => 'index', 'columns' => ['site_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'datations_laboratoire_id' => ['type' => 'foreign', 'columns' => ['laboratoire_id'], 'references' => ['laboratoires', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'datations_site_id' => ['type' => 'foreign', 'columns' => ['site_id'], 'references' => ['sites', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'datations_source_id_fkey' => ['type' => 'foreign', 'columns' => ['source_id'], 'references' => ['sources', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'type_datation' => 'Lorem ipsum dolor sit amet',
            'code_reference' => 'Lorem ipsum dolor sit amet',
            'date_bp' => 1,
            'annee_prise_echantillon' => 1,
            'discipline' => 'Lorem ipsum dolor sit amet',
            'laboratoire_id' => 1,
            'site_id' => 1,
            'detail_site_recolte' => 'Lorem ipsum dolor sit amet',
            'erreur_standard' => 1,
            'culture_associee' => 'Lorem ipsum dolor sit amet',
            'horizon_culturel' => 'Lorem ipsum dolor sit amet',
            'numero_structure' => 'Lorem ipsum dolor sit amet',
            'date_calibree' => 'Lorem ipsum dolor sit amet',
            'commentaire' => 'Lorem ipsum dolor sit amet',
            'created' => '12:32:25',
            'modified' => '12:32:25',
            'source_id' => 1
        ],
    ];
}
