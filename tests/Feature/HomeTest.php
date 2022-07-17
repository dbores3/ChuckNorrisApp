<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * Description: Tests the Home Controller
     * Author: David Bores
     * @return void
     */
    public function test_home_returns_a_successful_response()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
