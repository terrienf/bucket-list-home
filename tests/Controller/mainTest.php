<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainTest extends WebTestCase
{
    public function testPageAccueil(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('body', 'accueil');
    }

    public function testAboutUs(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/aboutus');

        $this->assertResponseIsSuccessful();
        $this->assertCount(3, $crawler->filter('div.team'));
    }
}