<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectOutsourcingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectOutsourcingsTable Test Case
 */
class ProjectOutsourcingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectOutsourcingsTable
     */
    public $ProjectOutsourcings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_outsourcings',
        'app.projects',
        'app.users',
        'app.clients',
        'app.outsourcings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProjectOutsourcings') ? [] : ['className' => 'App\Model\Table\ProjectOutsourcingsTable'];
        $this->ProjectOutsourcings = TableRegistry::get('ProjectOutsourcings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectOutsourcings);

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
