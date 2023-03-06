<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MainPageTest extends TestCase
{
    /**
     * A test checked the correct display of the main page.
     * 
     * @return void
     */
    public function testMainPage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
