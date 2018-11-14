<?php
namespace BaseApp\Test\TestCase\Model\Table;

use BaseApp\Model\Table\RoleMenusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * BaseApp\Model\Table\RoleMenusTable Test Case
 */
class RoleMenusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \BaseApp\Model\Table\RoleMenusTable
     */
    public $RoleMenus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.base_app.role_menus',
        'plugin.base_app.menus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RoleMenus') ? [] : ['className' => RoleMenusTable::class];
        $this->RoleMenus = TableRegistry::getTableLocator()->get('RoleMenus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoleMenus);

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
