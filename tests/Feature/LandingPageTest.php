<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    /**
     * Test the landing page loads successfully.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test the article list page loads.
     */
    public function test_article_list_page_loads(): void
    {
        $response = $this->get('/articlelist');

        $response->assertStatus(200);
    }
}
