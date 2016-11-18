<?php

namespace Tests\Louvre\ReservationBundle\Entity;

use Louvre\ReservationBundle\Entity\Order;
use Louvre\ReservationBundle\Entity\Ticket;
use Doctrine\Common\Collections\ArrayCollection;

class OrderTest extends \PHPUnit_Framework_TestCase
{
    private $order;
    private $today;

    public function __construct() {

        $this->order = new Order();
        $this->today = new \Datetime();
    }

    public function testDate() {

        // Si la date est bien une instance de Datetime
        // Si la date correspond bien a la date d'aujourd'hui
        $this->assertInstanceOf(\Datetime::class, $this->order->getDate());
        $this->assertEquals($this->today, $this->order->getDate());
    }

    public function testOrderNumber() {

        // Si le numéro de commande correspond bien a la regex
        $this->assertRegExp('#^CMD_[a-z0-9A-Z]{13}#', $this->order->getOrderNumber());
    }

    public function testDayVisit() {

        $this->order->setDayVisit(new \Datetime());
        // Si la date est bien une instance de Datetime
        $this->assertInstanceOf(\Datetime::class, $this->order->getDayVisit());
    }

    public function testTotal() {

        $this->order->addTotal(10);
        $this->order->addTotal(10);
        $this->order->addTotal(10);
        // Si il y a bien 30 dans total
        $this->assertEquals(30, $this->order->getTotal());
    }

    public function testStripeToken() {

        $this->order->setStripeToken('iamastripetoken');
        // Si le token est bien le meme que la string enregistrée
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

    public function testTicket() {

        $ticket1 = new Ticket();
        $ticket2 = new Ticket();
        $this->order->addTicket($ticket1);
        $this->order->addTicket($ticket2);
        // Si tickets est bien une instance de ArrayCollection
        $this->assertInstanceOf(ArrayCollection::class, $this->order->getTickets());

        // Si les tickets enregistrés sont bien les mêmes que ceux envoyés
        //   On fait un tableau de comparaison
        $arrayTest = [$ticket1, $ticket2];
        $arrayResult;
        //   On récupère les tickets et on les stock dans un tableau
        $tickets = $this->order->getTickets();
        foreach ($tickets as $ticket) {
            $arrayResult[] = $ticket;
        }
        //   Puis on compare les tableaux
        $this->assertEquals($arrayTest, $arrayResult);

        // Si on peut bien supprimer des tickets
        $this->order->removeTicket($ticket1);
        //   On récupère les tickets et on les stock dans un tableau
        $tickets = $this->order->getTickets();
        $arrayResult2;
        foreach ($tickets as $ticket) {
            $arrayResult2[] = $ticket;
        }
        //   Puis on compare
        $this->assertEquals([$ticket2], $arrayResult2);
    }

    // Fonction de validation
    // Pas de billets demi-journée pour le jour même si 14h passé
    public function testIsHalfDayValid() {

        $today = date('d/m/Y');

        // Création de la date de réservation -> aujourd'hui
        $dayVisit = \Datetime::createFromFormat('d/m/Y', $today);
        $this->order->setDayVisit($dayVisit);
        // Demi journée -> non
        $this->order->setHalfDay(false);

        // Création de la date a laquelle est faite la reservation -> aujourd'hui 10h00
        $bookingDate = \Datetime::createFromFormat('d/m/Y-H:i', $today . '-10:00');
        $this->order->setDate($bookingDate);
        // Si la validation ne refuse pas la reservation
        $this->assertNotFalse($this->order->isHalfDayValid());

        // Création de la date a laquelle est faite la reservation -> aujourd'hui 15h00
        $bookingDate = \Datetime::createFromFormat('d/m/Y-H:i', $today . '-15:00');
        $this->order->setDate($bookingDate);
        // Si la validation refuse la reservation
        $this->assertFalse($this->order->isHalfDayValid());
    }
}
