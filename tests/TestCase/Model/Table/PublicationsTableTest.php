<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PublicationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PublicationsTable Test Case
 */
class PublicationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PublicationsTable
     */
    public $Publications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.publications',
        'app.auteurs',
        'app.auteurs_publications',
        'app.datations',
        'app.laboratoires',
        'app.sites',
        'app.sources',
        'app.materiels',
        'app.datations_materiels',
        'app.objets',
        'app.datations_objets',
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
        $config = TableRegistry::exists('Publications') ? [] : ['className' => 'App\Model\Table\PublicationsTable'];
        $this->Publications = TableRegistry::get('Publications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Publications);

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
