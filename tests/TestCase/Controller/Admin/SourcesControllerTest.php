<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\SourcesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\SourcesController Test Case
 */
class SourcesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sources',
        'app.datations',
        'app.laboratoires',
        'app.sites',
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
