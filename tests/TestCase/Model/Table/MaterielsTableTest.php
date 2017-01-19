<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterielsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterielsTable Test Case
 */
class MaterielsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterielsTable
     */
    public $Materiels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.materiels',
        'app.datations',
        'app.laboratoires',
        'app.sites',
        'app.sources',
        'app.datations_materiels',
        'app.objets',
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
        $config = TableRegistry::exists('Materiels') ? [] : ['className' => 'App\Model\Table\MaterielsTable'];
        $this->Materiels = TableRegistry::get('Materiels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Materiels);

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
