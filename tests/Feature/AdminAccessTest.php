<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAccessTest extends TestCase
{
    use RefreshDatabase;

    protected function adminPath(): string
    {
        return parse_url(route('filament.admin.pages.dashboard'), PHP_URL_PATH);
    }

    protected function adminLoginPath(): string
    {
        return parse_url(route('filament.admin.auth.login'), PHP_URL_PATH);
    }

    protected function adminMfaSetupPath(): string
    {
        return parse_url(route('filament.admin.auth.multi-factor-authentication.set-up-required'), PHP_URL_PATH);
    }

    /**
     * Test admin login page loads.
     */
    public function test_admin_login_page_renders(): void
    {
        $response = $this->get($this->adminLoginPath());

        $response->assertStatus(200);
    }

    /**
     * Test admin dashboard redirects to login if not authenticated.
     */
    public function test_admin_dashboard_redirects_guest(): void
    {
        $response = $this->get($this->adminPath());

        $response->assertRedirect($this->adminLoginPath());
    }

    public function test_default_admin_path_is_not_exposed(): void
    {
        $this->get('/admin/login')->assertNotFound();
        $this->get('/admin')->assertNotFound();
    }

    public function test_non_admin_user_cannot_access_admin_panel(): void
    {
        $user = User::factory()->create([
            'is_admin' => false,
        ]);

        $this->actingAs($user)
            ->get($this->adminPath())
            ->assertForbidden();
    }

    public function test_admin_without_mfa_is_redirected_to_required_setup(): void
    {
        $admin = User::factory()->create([
            'is_admin' => true,
            'has_email_authentication' => false,
            'app_authentication_secret' => null,
            'app_authentication_recovery_codes' => null,
        ]);

        $this->actingAs($admin)
            ->get($this->adminPath())
            ->assertRedirect($this->adminMfaSetupPath());
    }

    public function test_required_mfa_setup_route_uses_configured_prefix(): void
    {
        $this->assertStringContainsString(
            '/' . env('FILAMENT_ADMIN_MFA_PREFIX', 'verify-access') . '/',
            $this->adminMfaSetupPath(),
        );
    }
}
