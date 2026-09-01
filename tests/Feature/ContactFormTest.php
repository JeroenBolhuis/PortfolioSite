<?php

namespace Tests\Feature;

use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use RuntimeException;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    private array $validSubmission = [
        'name' => 'Ada Lovelace',
        'email' => 'ada@example.com',
        'message' => 'I would like to discuss a project.',
        'website' => '',
    ];

    public function test_contact_form_supports_a_normal_post_and_sets_reply_to(): void
    {
        Mail::fake();

        $response = $this->post(route('contact.submit'), $this->validSubmission);

        $response->assertRedirect(route('home').'#contact');
        $response->assertSessionHas('success');
        Mail::assertSent(ContactFormSubmission::class, function (ContactFormSubmission $mail): bool {
            $replyTo = $mail->envelope()->replyTo[0];

            return $replyTo->address === 'ada@example.com'
                && $replyTo->name === 'Ada Lovelace';
        });
    }

    public function test_contact_form_markup_works_without_javascript(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('action="'.route('contact.submit').'"', false)
            ->assertSee('method="POST"', false)
            ->assertSee('name="name"', false)
            ->assertSee('name="email"', false)
            ->assertSee('name="message"', false)
            ->assertSee('maxlength="5000"', false);
    }

    public function test_contact_form_rejects_an_overlong_message(): void
    {
        Mail::fake();

        $response = $this->postJson(route('contact.submit'), [
            ...$this->validSubmission,
            'message' => str_repeat('a', 5001),
        ]);

        $response->assertUnprocessable()->assertJsonValidationErrors('message');
        Mail::assertNothingSent();
    }

    public function test_honeypot_submissions_are_discarded(): void
    {
        Mail::fake();

        $this->postJson(route('contact.submit'), [
            ...$this->validSubmission,
            'website' => 'https://spam.example',
        ])->assertOk();

        Mail::assertNothingSent();
    }

    public function test_mail_errors_are_reported_without_claiming_success(): void
    {
        Mail::shouldReceive('to')->once()->andThrow(new RuntimeException('SMTP unavailable'));

        $this->postJson(route('contact.submit'), $this->validSubmission)
            ->assertStatus(500)
            ->assertJsonMissing(['message' => __('Your message has been sent successfully!')])
            ->assertJson(['message' => __('Your message could not be sent. Please try again later.')]);
    }

    public function test_repeated_submissions_are_throttled(): void
    {
        Mail::fake();

        for ($attempt = 0; $attempt < 3; $attempt++) {
            $this->postJson(route('contact.submit'), $this->validSubmission)->assertOk();
        }

        $this->postJson(route('contact.submit'), $this->validSubmission)
            ->assertStatus(429)
            ->assertHeader('Retry-After')
            ->assertJson(['message' => __('Too many messages were submitted. Please wait 10 minutes and try again.')]);

        Mail::assertSentCount(3);
    }
}
