<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\MaterielsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\MaterielsController Test Case
 */
class MaterielsControllerTest extends IntegrationTestCase
{

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
        'app.publications',
        'app.auteurs',
        'app.auteurs_publications',
        'app.datations_publications',
        'app.datations_materiels',
        'app.objets',
        'app.datations_objets'
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
