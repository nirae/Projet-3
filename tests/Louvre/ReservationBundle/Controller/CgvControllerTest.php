<?php

namespace Tests\Louvre\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CgvControllerTest extends WebTestCase
{
    private $client;
    private $crawler;

    protected function setUp() {

        $this->client = static::createClient();
        $this->crawler = $this->client->request('GET', '/conditions-generales');
    }

    public function testCgv() {

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        // Si la page est bien affichée
        $this->assertContains(
            '<title>Billeterie Louvre -  Conditions générales de vente</title>',
            $this->client->getResponse()->getContent()
        );

        $this->assertContains(
            '<h1 class="center">Conditions générales de vente</h1>',
            $this->client->getResponse()->getContent()
        );
    }
}
