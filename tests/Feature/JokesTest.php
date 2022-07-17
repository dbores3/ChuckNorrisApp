<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JokesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_sends_jokes_to_emails()
    {
        $response = $this->post('/jokes', [
            'emails' => 'davidborestest@mailinator.com'
        ]);
        $response->assertRedirect('/');
    }
}
