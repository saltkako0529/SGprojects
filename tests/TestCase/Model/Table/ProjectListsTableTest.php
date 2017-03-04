<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectListsTable Test Case
 */
class ProjectListsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectListsTable
     */
    public $ProjectLists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_lists',
        'app.users',
        'app.projects',
        'app.clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProjectLists') ? [] : ['className' => 'App\Model\Table\ProjectListsTable'];
        $this->ProjectLists = TableRegistry::get('ProjectLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectLists);

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
