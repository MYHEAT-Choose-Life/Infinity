<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User; // Just for reference if needed, but not used here explicitly for auth unless required

class ContactFormTest extends TestCase
{
    /**
     * Test contact form validation errors.
     */
    public function test_contact_form_requires_fields(): void
    {
        $response = $this->post('/contact', []);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }

    /**
     * Test successful contact form submission.
     * Note: This assumes mail is mocked or configured safely in phpunit.xml (array driver).
     */
    public function test_contact_form_submission_successful(): void
    {
        $data = [
            'name' => 'Test Visitor',
            'email' => 'visitor@example.com',
            'message' => 'Hello, this is a test message.',
        ];

        $response = $this->post('/contact', $data);

        // Adjust assertion based on actual controller response (redirect or JSON)
        // Assuming redirect back with success message based on standard practices
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302); // Redirect
    }
}
