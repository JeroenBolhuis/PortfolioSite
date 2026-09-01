<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrivacyAndMetadataTest extends TestCase
{
    public function test_privacy_notice_covers_the_collection_and_service_providers(): void
    {
        $this->get(route('privacy'))
            ->assertOk()
            ->assertSee('Jeroen Bolhuis')
            ->assertSee('12 months')
            ->assertSee('IP address')
            ->assertSee('Vercel')
            ->assertSee('Google')
            ->assertSee('Microsoft')
            ->assertSee('XSRF-TOKEN')
            ->assertSee('Autoriteit Persoonsgegevens');
    }

    public function test_canonical_and_social_urls_use_the_configured_host(): void
    {
        config()->set('app.url', 'https://www.jeroen-bolhuis.nl');

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('<link rel="canonical" href="https://www.jeroen-bolhuis.nl/">', false)
            ->assertSee('<meta property="og:url" content="https://www.jeroen-bolhuis.nl/">', false)
            ->assertDontSee('webdevsite.nl')
            ->assertDontSee('x.com/_jeroentjeb_');

        $this->get(route('privacy'))
            ->assertOk()
            ->assertSee('<link rel="canonical" href="https://www.jeroen-bolhuis.nl/privacy">', false);
    }

    public function test_dutch_timeline_dates_are_fully_localized(): void
    {
        $this->withSession(['locale' => 'nl'])
            ->get(route('home'))
            ->assertOk()
            ->assertSee('september 2026 - januari 2027')
            ->assertSee('september 2022 - heden')
            ->assertSee('september 2025 - heden')
            ->assertSee('juli 2026')
            ->assertSee('februari 2025 - april 2025')
            ->assertSee('mei 2025 - juli 2025')
            ->assertDontSee('May 2025 - Heden')
            ->assertDontSee('February 2025')
            ->assertDontSee('April 2025')
            ->assertDontSee('July 2025')
            ->assertDontSee('July 2026');
    }
}
