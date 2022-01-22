<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNewsAvailable()
    {
        $response = $this->get(route('news.index'));

        $response->assertStatus(200);
    }

    public function testNewsShow()
    {
        $response = $this->get(route('news.show', ['id' => mt_rand(1, 20)]));

        $response->assertStatus(200);
    }
}
