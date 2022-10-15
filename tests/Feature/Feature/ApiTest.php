<?php

namespace Tests\Feature\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_azizam()
    {
        $response = $this->get('/api/v1/azizam/');

        $response->assertStatus(200)
        ->assertJson([
            'data' => 'Azizam',
        ]);
    }

    public function test_eshgham()
    {
        $response = $this->get('/api/v1/eshgham/');

        $response->assertStatus(200)
        ->assertJson([
            'data' => 'Eshgham',
        ]);
    }

    public function test_azizam_from_name()
    {
        $response = $this->get('/api/v1/azizam/test/test');

        $response->assertStatus(200)
        ->assertJson([
            'data' => 'test Azizami. - test',
        ]);
    }

    public function test_eshgham_from_name()
    {
        $response = $this->get('/api/v1/eshgham/test/test');

        $response->assertStatus(200)
        ->assertJson([
            'data' => 'test Eshghami. - test',
        ]);
    }
}
