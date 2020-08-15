<?php
declare(strict_types=1);

namespace App\Test\TestCase\Command;

use App\Command\WsServerCommand;
use Cake\TestSuite\ConsoleIntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Command\WsServerCommand Test Case
 *
 * @uses \App\Command\WsServerCommand
 */
class WsServerCommandTest extends TestCase
{
    use ConsoleIntegrationTestTrait;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->useCommandRunner();
    }
    /**
     * Test buildOptionParser method
     *
     * @return void
     */
    public function testBuildOptionParser(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test execute method
     *
     * @return void
     */
    public function testExecute(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
