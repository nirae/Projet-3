<?php

namespace Louvre\ReservationBundle\Entity;

use Louvre\ReservationBundle\Entity\Ticket;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Louvre\ReservationBundle\Validator\AntiThousandBooking;
use Louvre\ReservationBundle\Validator\AntiBookingHoliday;
use Louvre\ReservationBundle\Validator\AntiBookingClosedDay;
use Louvre\ReservationBundle\Validator\AntiBookingPastDay;

/**
* @ORM\Table(name="order_louvre")
* @ORM\Entity
*/
class Order {

    /**
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
    * @ORM\Column(name="booking_date", type="datetime")
    * @Assert\DateTime()
    */
    private $date;

    /**
    * @ORM\Column(name="order_number", type="string", length=255)
    */
    private $orderNumber;

    /**
    * @ORM\Column(name="day_visit", type="datetime")
    * @Assert\DateTime()
    * @AntiBookingHoliday()
    * @AntiBookingClosedDay()
    * @AntiBookingPastDay()
    * @AntiThousandBooking()
    */
    private $dayVisit;

    /**
    * @ORM\Column(name="email", type="string", length=255)
    * @Assert\Email()
    */
    private $email;

    /**
    * @ORM\Column(name="half_day", type="boolean")
    */
    private $halfDay = false;

    /**
    * @ORM\Column(name="total", type="integer")
    */
    private $total = 0;

    /**
    * @ORM\Column(name="token", type="string", length=255)
    */
    private $stripeToken;

    /**
    * @ORM\OneToMany(targetEntity="Louvre\ReservationBundle\Entity\Ticket", mappedBy="order", cascade={"persist"})
    */
    private $tickets;

    // Constructeur
    public function __construct()
    {
        // Génère la date de commande
        $this->date = new \Datetime();
        // Préremplie la date de réservation avec la date actuelle
        $this->dayVisit = new \Datetime();
        $this->tickets = new ArrayCollection();
        // Génère le numéro de commande
        $this->orderNumber = uniqid('CMD_');
    }

    /**
    * Get id
    *
    * @return integer
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Set date
    *
    * @param \DateTime $date
    *
    * @return Order
    */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
    * Get date
    *
    * @return \DateTime
    */
    public function getDate()
    {
        return $this->date;
    }

    /**
    * Set orderNumber
    *
    * @param string $orderNumber
    *
    * @return Order
    */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
    * Get orderNumber
    *
    * @return string
    */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
    * Set dayVisit
    *
    * @param \DateTime $dayVisit
    *
    * @return Order
    */
    public function setDayVisit($dayVisit)
    {
        $this->dayVisit = $dayVisit;

        return $this;
    }

    /**
    * Get dayVisit
    *
    * @return \DateTime
    */
    public function getDayVisit()
    {
        return $this->dayVisit;
    }

    /**
    * Set total
    *
    * @param integer $total
    *
    * @return Order
    */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
    * Get total
    *
    * @return integer
    */
    public function getTotal()
    {
        return $this->total;
    }

    public function addTotal($ticketPrice)
    {
        $this->total += $ticketPrice;

        return $this;
    }

    /**
    * Set stripeToken
    *
    * @param string $stripeToken
    *
    * @return Order
    */
    public function setStripeToken($stripeToken)
    {
        $this->stripeToken = $stripeToken;

        return $this;
    }

    /**
    * Get stripeToken
    *
    * @return string
    */
    public function getStripeToken()
    {
        return $this->stripeToken;
    }

    /**
    * Set halfDay
    *
    * @param boolean $halfDay
    *
    * @return Order
    */
    public function setHalfDay($halfDay)
    {
        $this->halfDay = $halfDay;

        return $this;
    }

    /**
    * Get halfDay
    *
    * @return boolean
    */
    public function getHalfDay()
    {
        return $this->halfDay;
    }

    /**
    * Set email
    *
    * @param string $email
    *
    * @return Order
    */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
    * Get email
    *
    * @return string
    */
    public function getEmail()
    {
        return $this->email;
    }

    // Validation
    // Pas de billets demi-journée pour le jour meme si 14h passé
    /**
    * @Assert\IsTrue(message = "Il n'est pas possible de réserver un billet demi-journée pour le jour même une fois 14h passée")
    */
    public function isHalfDayValid()
    {
        $dayVisit = date('d/m/Y', $this->dayVisit->getTimestamp());
        $hourToday = date('H');
        $today = date('d/m/Y');

        if ($this->halfDay == true && $today == $dayVisit) {
            if (intval($hourToday) >= 14) {
                return false;
            }
        }
    }

    /**
    * Add ticket
    *
    * @param \Louvre\ReservationBundle\Entity\Ticket $ticket
    *
    * @return Order
    */
    public function addTicket(\Louvre\ReservationBundle\Entity\Ticket $ticket)
    {
        $this->tickets[] = $ticket;

        return $this;
    }

    /**
    * Remove ticket
    *
    * @param \Louvre\ReservationBundle\Entity\Ticket $ticket
    */
    public function removeTicket(\Louvre\ReservationBundle\Entity\Ticket $ticket)
    {
        $this->tickets->removeElement($ticket);
    }

    /**
    * Get tickets
    *
    * @return \Doctrine\Common\Collections\Collection
    */
    public function getTickets()
    {
        return $this->tickets;
    }
}
