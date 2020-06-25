<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MAreasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MAreasTable Test Case
 */
class MAreasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MAreasTable
     */
    protected $MAreas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('MAreas') ? [] : ['className' => MAreasTable::class];
        $this->MAreas = TableRegistry::getTableLocator()->get('MAreas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->MAreas);

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
}
