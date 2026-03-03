<?php

namespace Tests\Feature;

use App\Models\User;
use Filament\Auth\MultiFactor\App\AppAuthentication;
use Filament\Auth\MultiFactor\Email\Notifications\VerifyEmailAuthentication;
use Filament\Auth\Pages\Login;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Livewire\Livewire;
use Tests\TestCase;

class AdminMfaTest extends TestCase
{
    use RefreshDatabase;

    protected function adminPath(): string
    {
        return parse_url(route('filament.admin.pages.dashboard'), PHP_URL_PATH);
    }

    protected function adminMfaSetupPath(): string
    {
        return parse_url(route('filament.admin.auth.multi-factor-authentication.set-up-required'), PHP_URL_PATH);
    }

    public function test_admin_with_app_mfa_can_access_panel_root(): void
    {
        $appAuthentication = app(AppAuthentication::class);
        $secret = $appAuthentication->generateSecret();

        $admin = User::factory()->create([
            'is_admin' => true,
            'app_authentication_secret' => encrypt($secret),
            'app_authentication_recovery_codes' => [
                bcrypt('recovery-one'),
            ],
        ]);

        $this->actingAs($admin)
            ->get($this->adminPath())
            ->assertOk();
    }

    public function test_admin_can_reach_required_mfa_setup_page(): void
    {
        $admin = User::factory()->create([
            'is_admin' => true,
        ]);

        $this->actingAs($admin)
            ->get($this->adminMfaSetupPath())
            ->assertOk();
    }

    public function test_email_mfa_login_sends_a_notification(): void
    {
        Notification::fake();

        $admin = User::factory()->create([
            'is_admin' => true,
            'has_email_authentication' => true,
        ]);

        Livewire::withQueryParams(['panel' => 'admin'])
            ->test(Login::class)
            ->set('data.email', $admin->email)
            ->set('data.password', 'password')
            ->call('authenticate');

        Notification::assertSentTo($admin, VerifyEmailAuthentication::class);
    }

    public function test_admin_with_email_mfa_is_challenged_before_session_is_completed(): void
    {
        Notification::fake();

        $admin = User::factory()->create([
            'is_admin' => true,
            'has_email_authentication' => true,
        ]);

        Livewire::withQueryParams(['panel' => 'admin'])
            ->test(Login::class)
            ->set('data.email', $admin->email)
            ->set('data.password', 'password')
            ->call('authenticate')
            ->assertSet('userUndertakingMultiFactorAuthentication', fn (?string $value): bool => filled($value));

        $this->assertGuest();
    }

    public function test_app_mfa_recovery_code_can_be_verified(): void
    {
        $admin = User::factory()->create([
            'is_admin' => true,
            'app_authentication_recovery_codes' => [
                bcrypt('recovery-one'),
            ],
        ]);

        $this->assertTrue(app(AppAuthentication::class)->verifyRecoveryCode('recovery-one', $admin));
        $this->assertFalse(app(AppAuthentication::class)->verifyRecoveryCode('wrong-code', $admin));
    }
}
