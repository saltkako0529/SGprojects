<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OutsourcingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OutsourcingsTable Test Case
 */
class OutsourcingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OutsourcingsTable
     */
    public $Outsourcings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Outsourcings') ? [] : ['className' => 'App\Model\Table\OutsourcingsTable'];
        $this->Outsourcings = TableRegistry::get('Outsourcings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Outsourcings);

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
