<?php

namespace Tests\Louvre\ReservationBundle\BookingManagerService;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookingManagerServiceTest extends WebTestCase
{
    private $client;
    private $bookingmanager;

    protected function setUp() {

        $this->client = self::createClient();
        $container = $this->client->getContainer();
        $this->bookingmanager = $container->get('louvre_reservation.bookingmanager');
    }

    public function testCalculAge() {
        // 21
        $date = \Datetime::createFromFormat('d/m/Y', '31/12/1995');
        $age = $this->bookingmanager->calculAge($date);
        $this->assertEquals(20, $age);
        // 25
        $date = \Datetime::createFromFormat('d/m/Y', '31/12/1990');
        $age = $this->bookingmanager->calculAge($date);
        $this->assertEquals(25, $age);
        // 5
        $date = \Datetime::createFromFormat('d/m/Y', '31/12/2010');
        $age = $this->bookingmanager->calculAge($date);
        $this->assertEquals(5, $age);
    }

    public function testCalculPrice() {
        // Tarif normal
        $price = $this->bookingmanager->calculPrice(21, false, false);
        $this->assertEquals(16, $price);
        // Tarif réduit
        $price = $this->bookingmanager->calculPrice(21, true, false);
        $this->assertEquals(6, $price);
        // Tarif demi-journée
        $price = $this->bookingmanager->calculPrice(21, false, true);
        $this->assertEquals(8, $price);
        // Gratuit moins de 4 ans
        $price = $this->bookingmanager->calculPrice(3, false, false);
        $this->assertEquals(0, $price);
        // Tarif enfant
        $price = $this->bookingmanager->calculPrice(8, false, false);
        $this->assertEquals(8, $price);
        // Senior
        $price = $this->bookingmanager->calculPrice(75, false, false);
        $this->assertEquals(12, $price);
    }
}
