<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComplaintTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComplaintTable Test Case
 */
class ComplaintTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ComplaintTable
     */
    public $Complaint;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.complaint'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Complaint') ? [] : ['className' => ComplaintTable::class];
        $this->Complaint = TableRegistry::get('Complaint', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Complaint);

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
