<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RoutingTest extends WebTestCase
{
    /**
     * @dataProvider goodUrls
     */
    public function testPageIsSuccessful($url) {

        $client = self::createClient();
        $client->request('GET', $url);

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    /**
     * @dataProvider badUrls
     */
    public function testPageIsNotSuccessful($url) {

        $client = self::createClient();
        $client->request('GET', $url);

        $this->assertFalse($client->getResponse()->isSuccessful());
    }

    public function goodUrls() {
        return array(
            array('/'),
            array('/conditions-generales'),
        );
    }

    public function badUrls() {
        return array(
            array('/blablabla'),
            array('/24'),
        );
    }
}
