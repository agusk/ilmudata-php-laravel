<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculatorFeatureTest extends TestCase
{
    /** @test */
    public function can_add_two_numbers()
    {
        $response = $this->get('/add/1/2');
        $response->assertStatus(200);
        $response->assertSee(3);
    }

    /** @test */
    public function can_subtract_two_numbers()
    {
        $response = $this->get('/subtract/5/3');
        $response->assertStatus(200);
        $response->assertSee(2);
    }
}
