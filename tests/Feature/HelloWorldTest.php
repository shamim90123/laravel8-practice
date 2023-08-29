<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);

        $response = $this->get('/hello');

        $response->assertStatus(200)
                 ->assertSee('Hello, World!');
    }
}
