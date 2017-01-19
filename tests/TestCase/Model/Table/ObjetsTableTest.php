<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObjetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObjetsTable Test Case
 */
class ObjetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ObjetsTable
     */
    public $Objets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.objets',
        'app.datations',
        'app.laboratoires',
        'app.sites',
        'app.sources',
        'app.materiels',
        'app.datations_materiels',
        'app.datations_objets',
        'app.publications',
        'app.auteurs',
        'app.auteurs_publications',
        'app.datations_publications'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Objets') ? [] : ['className' => 'App\Model\Table\ObjetsTable'];
        $this->Objets = TableRegistry::get('Objets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Objets);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
