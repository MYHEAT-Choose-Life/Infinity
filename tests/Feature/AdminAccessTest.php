<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdminAccessTest extends TestCase
{
    /**
     * Test admin login page loads.
     */
    public function test_admin_login_page_renders(): void
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }

    /**
     * Test admin dashboard redirects to login if not authenticated.
     */
    public function test_admin_dashboard_redirects_guest(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect('/admin/login');
    }
}
