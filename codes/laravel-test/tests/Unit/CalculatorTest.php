<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\CalculatorController;

class CalculatorTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function can_add_numbers()
    {
        $calculator = new CalculatorController();
        $result = $calculator->add(1, 1);
        $this->assertEquals(2, $result);
    }

    /** @test */
    public function can_subtract_numbers()
    {
        $calculator = new CalculatorController();
        $result = $calculator->subtract(2, 1);
        $this->assertEquals(1, $result);
    }
}
