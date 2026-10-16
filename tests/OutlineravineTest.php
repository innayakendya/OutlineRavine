<?php
/**
 * Tests for OutlineRavine
 */

use PHPUnit\Framework\TestCase;
use Outlineravine\Outlineravine;

class OutlineravineTest extends TestCase {
    private Outlineravine $instance;

    protected function setUp(): void {
        $this->instance = new Outlineravine(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlineravine::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
