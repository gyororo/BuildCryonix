<?php
/**
 * Tests for BuildCryonix
 */

use PHPUnit\Framework\TestCase;
use Buildcryonix\Buildcryonix;

class BuildcryonixTest extends TestCase {
    private Buildcryonix $instance;

    protected function setUp(): void {
        $this->instance = new Buildcryonix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Buildcryonix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
