<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AggregatorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAggregatorAvailable()
    {
        $response = $this->get(route('aggregator.index'));

        $response->assertStatus(200);
    }
}