<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaskHoursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaskHoursTable Test Case
 */
class TaskHoursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TaskHoursTable
     */
    public $TaskHours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.task_hours',
        'app.uses',
        'app.projects',
        'app.users',
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
        $config = TableRegistry::exists('TaskHours') ? [] : ['className' => 'App\Model\Table\TaskHoursTable'];
        $this->TaskHours = TableRegistry::get('TaskHours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TaskHours);

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
