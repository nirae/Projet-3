<?php

namespace Louvre\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="order")
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(name="order_number", type="string", length=255)
     */
    private $orderNumber;

    /**
     * @ORM\Column(name="day_visit", type="datetime")
     */
    private $dayVisit;

    /**
     * @ORM\Column(name="ticket_type", type="string", length=255)
     */
    private $ticketType;

    /**
     * @ORM\Column(name="total", type="integer")
     */
    private $total;

    /**
     * @ORM\Column(name="stripe_token", type="string", length=255)
     */
    private $stripeToken;

    // Constructeur
    public function __construct()
    {
        $this->date = new \Datetime();
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
     * Set ticketType
     *
     * @param string $ticketType
     *
     * @return Order
     */
    public function setTicketType($ticketType)
    {
        $this->ticketType = $ticketType;

        return $this;
    }

    /**
     * Get ticketType
     *
     * @return string
     */
    public function getTicketType()
    {
        return $this->ticketType;
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
}
