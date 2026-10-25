<?php
/**
 * Tests for DefiOrbit
 */

use PHPUnit\Framework\TestCase;
use Defiorbit\Defiorbit;

class DefiorbitTest extends TestCase {
    private Defiorbit $instance;

    protected function setUp(): void {
        $this->instance = new Defiorbit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defiorbit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
