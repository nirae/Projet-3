<?php

namespace Tests\Louvre\ReservationBundle\Entity;

use Louvre\ReservationBundle\Entity\Ticket;
use Louvre\ReservationBundle\Entity\Order;


class TicketTest extends \PHPUnit_Framework_TestCase
{

    private $ticket;

    public function __construct() {

        $this->ticket = new Ticket();
    }

    public function testName() {

        $this->ticket->setName('test');
        $this->assertEquals('test', $this->ticket->getName());
    }

    public function testFirstName() {

        $this->ticket->setFirstName('test');
        $this->assertEquals('test', $this->ticket->getFirstName());
    }

    public function testBirthdate() {

        $this->ticket->setBirthDate(new \Datetime);
        $this->assertInstanceOf(\Datetime::class, $this->ticket->getBirthDate());
    }

    public function testCountry() {

        $this->ticket->setCountry('FR');
        $this->assertEquals('FR', $this->ticket->getCountry());
    }

    public function testReducedPrice() {

        $this->ticket->setReducedPrice(true);
        $this->assertEquals(true, $this->ticket->getReducedPrice());
    }

    public function testTicketPrice() {

        $this->ticket->setTicketPrice(16);
        $this->assertEquals(16, $this->ticket->getTicketPrice());
    }

    public function testOrder() {

        $order = new Order();
        $this->ticket->setOrder($order);
        $this->assertInstanceOf(Order::class, $this->ticket->getOrder());
    }

}
