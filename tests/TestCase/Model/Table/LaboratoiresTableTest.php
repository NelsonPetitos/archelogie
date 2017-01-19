<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaboratoiresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaboratoiresTable Test Case
 */
class LaboratoiresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LaboratoiresTable
     */
    public $Laboratoires;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.laboratoires',
        'app.datations',
        'app.sites',
        'app.sources',
        'app.materiels',
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
        $config = TableRegistry::exists('Laboratoires') ? [] : ['className' => 'App\Model\Table\LaboratoiresTable'];
        $this->Laboratoires = TableRegistry::get('Laboratoires', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Laboratoires);

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
