<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MUsersTable Test Case
 */
class MUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MUsersTable
     */
    protected $MUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.MUsers',
        'app.MDepartments',
        'app.MAreas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MUsers') ? [] : ['className' => MUsersTable::class];
        $this->MUsers = TableRegistry::getTableLocator()->get('MUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->MUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
