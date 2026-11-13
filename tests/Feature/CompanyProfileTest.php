<?php

namespace Tests\Feature;

use Tests\TestCase;

class CompanyProfileTest extends TestCase
{
    /**
     * Test that the home page loads successfully with status 200.
     */
    public function test_home_page_is_accessible_and_renders_correct_view(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewIs('pages.home');
        $response->assertSee('Nexora');
        $response->assertSee('Empowering Enterprise Growth');
        $response->assertSee('Explore Our Services');
    }

    /**
     * Test that the about page loads successfully with status 200 and required sections.
     */
    public function test_about_page_is_accessible_and_renders_correct_view(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
        $response->assertViewIs('pages.about');
        $response->assertSee('Our Mission');
        $response->assertSee('Our Vision');
        $response->assertSee('Our Core Values');
        $response->assertSee('Company History');
        $response->assertSee('Meet Our Leadership Team');
    }

    /**
     * Test that the services page loads successfully and displays at least 6 services.
     */
    public function test_services_page_is_accessible_and_renders_correct_view(): void
    {
        $response = $this->get(route('services'));

        $response->assertStatus(200);
        $response->assertViewIs('pages.services');
        $response->assertSee('Web Development');
        $response->assertSee('Mobile Development');
        $response->assertSee('UI/UX Design');
        $response->assertSee('Cloud Solutions');
        $response->assertSee('Cybersecurity');
        $response->assertSee('IT Consulting');
    }

    /**
     * Test that the contact page loads successfully with form and contact info.
     */
    public function test_contact_page_is_accessible_and_renders_correct_view(): void
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(200);
        $response->assertViewIs('pages.contact');
        $response->assertSee('Start a Conversation');
        $response->assertSee('contact@nexorainnovations.com');
        $response->assertSee('+63 (2) 8876-5432');
        $response->assertSee('Our Headquarters');
    }
}
