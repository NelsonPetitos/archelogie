<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DatationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DatationsTable Test Case
 */
class DatationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DatationsTable
     */
    public $Datations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.datations',
        'app.laboratoires',
        'app.sites',
        'app.sources',
        'app.publications',
        'app.auteurs',
        'app.auteurs_publications',
        'app.datations_publications',
        'app.materiels',
        'app.datations_materiels',
        'app.objets',
        'app.datations_objets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Datations') ? [] : ['className' => 'App\Model\Table\DatationsTable'];
        $this->Datations = TableRegistry::get('Datations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Datations);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
