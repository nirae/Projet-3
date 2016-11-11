<?php

namespace Tests\Louvre\ReservationBundle\Entity;

use Louvre\ReservationBundle\Entity\Order;
use Louvre\ReservationBundle\Entity\Ticket;
use Doctrine\Common\Collections\ArrayCollection;

class OrderTest extends \PHPUnit_Framework_TestCase
{
    private $order;

    public function __construct() {
        $this->order = new Order();
    }

    public function testDate() {
        $this->assertInstanceOf(\Datetime::class, $this->order->getDate());
    }

    public function testOrderNumber() {
        $this->assertRegExp('#^CMD_[a-z0-9A-Z]{13}#', $this->order->getOrderNumber());
    }

    public function testDayVisit() {
        $this->order->setDayVisit(new \Datetime());
        $this->assertInstanceOf(\Datetime::class, $this->order->getDayVisit());
    }

    public function testTotal() {
        $this->order->addTotal(10);
        $this->order->addTotal(10);
        $this->order->addTotal(10);

        $this->assertEquals(30, $this->order->getTotal());
    }

    public function testStripeToken() {
        $this->order->setStripeToken('iamastripetoken');
        $this->assertEquals('iamastripetoken', $this->order->getStripeToken());
    }

    public function testHalfDay() {
        $this->order->setHalfDay(true);
        $this->assertTrue($this->order->getHalfDay());
    }

    public function testEmail() {
        $this->order->setEmail('iaman@email.com');
        $this->assertEquals('iaman@email.com', $this->order->getEmail());
    }

    public function testTicketsIsArrayCollection() {
        $ticket1 = new Ticket();
        $ticket2 = new Ticket();
        $this->order->addTicket($ticket1);
        $this->order->addTicket($ticket2);

        $this->assertInstanceOf(ArrayCollection::class, $this->order->getTickets());
    }

    public function testAddTicket() {
        $ticket1 = new Ticket();
        $ticket2 = new Ticket();
        $arrayTest = [$ticket1, $ticket2];

        $this->order->addTicket($ticket1);
        $this->order->addTicket($ticket2);

        $tickets = $this->order->getTickets();
        $arrayResult;
        foreach ($tickets as $ticket) {
            $arrayResult[] = $ticket;
        }

        $this->assertEquals($arrayTest, $arrayResult);
    }

    public function testRemoveTicket() {
        $ticket1 = new Ticket();
        $ticket2 = new Ticket();
        $arrayTest = [$ticket2];

        $this->order->addTicket($ticket1);
        $this->order->addTicket($ticket2);

        $this->order->removeTicket($ticket1);

        $tickets = $this->order->getTickets();
        $arrayResult;
        foreach ($tickets as $ticket) {
            $arrayResult[] = $ticket;
        }

        $this->assertEquals($arrayTest, $arrayResult);
    }
}
