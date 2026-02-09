<?php
/**
 * Tests for ReadmeMd
 */

use PHPUnit\Framework\TestCase;
use Readmemd\Readmemd;

class ReadmemdTest extends TestCase {
    private Readmemd $instance;

    protected function setUp(): void {
        $this->instance = new Readmemd(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Readmemd::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
