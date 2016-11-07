<?php

namespace Louvre\ReservationBundle\Entity;

use Louvre\ReservationBundle\Entity\Order;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="ticket")
 * @ORM\Entity
 */
class Ticket {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="booking_name", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $name;

    /**
     * @ORM\Column(name="booking_first_name", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $firstName;

    /**
     * @ORM\Column(name="birth_date", type="datetime")
     * @Assert\Date()
     */
    private $birthDate;

    /**
     * @ORM\Column(name="country", type="string", length=255)
     * @Assert\Country()
     */
    private $country;

    /**
     * @ORM\Column(name="reduced_price", type="boolean")
     * @Assert\Type("bool")
     */
    private $reducedPrice;

    /**
     * @ORM\Column(name="ticket_price", type="integer")
     */
    private $ticketPrice;

    /**
     * @ORM\ManyToOne(targetEntity="Louvre\ReservationBundle\Entity\Order", inversedBy="tickets")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="id")
     */
    private $order;

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
     * Set name
     *
     * @param string $name
     *
     * @return Ticket
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Ticket
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Ticket
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        // Calcul de l'age
        $age = $this->calculAge($birthDate);
        // Calcul du tarif
        $prix = $this->calculPrice($age, $this->reducedPrice, false);
        // Remplissage du tarif
        $this->setTicketPrice($prix);

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Ticket
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set reducedPrice
     *
     * @param boolean $reducedPrice
     *
     * @return Ticket
     */
    public function setReducedPrice($reducedPrice)
    {
        $this->reducedPrice = $reducedPrice;

        return $this;
    }

    /**
     * Get reducedPrice
     *
     * @return boolean
     */
    public function getReducedPrice()
    {
        return $this->reducedPrice;
    }

    /**
     * Set ticketPrice
     *
     * @param integer $ticketPrice
     *
     * @return Ticket
     */
    public function setTicketPrice($ticketPrice)
    {
        $this->ticketPrice = $ticketPrice;

        return $this;
    }

    /**
     * Get ticketPrice
     *
     * @return integer
     */
    public function getTicketPrice()
    {
        return $this->ticketPrice;
    }

    // Calcul de l'age
    private function calculAge($birthDate)
    {
        // Découpage date de naissance
        $year =  intval(date('Y', $birthDate->getTimestamp()));
        $month = intval(date('m', $birthDate->getTimestamp()));
        $day = intval(date('d', $birthDate->getTimestamp()));

        // Découpage date actuelle
        $y = intval(date('Y'));
        $m = intval(date('m'));
        $d = intval(date('d'));

        if (($month < $m) || (($month == $m) && ($day <= $d))) {
            $age = $y - $year;
            return $age;
        } else {
            $age = ($y - $year) - 1;
            return $age;
        }

    }

    // Calcul du tarif
    private function calculPrice($age, $reducedPrice, $halfDay) {
        $price = 16;

        if ($age < 4) {
            $price = 0;
        } elseif ($age > 4 && $age < 12) {
            $price = 8;
        } elseif ($age > 60) {
            $price = 12;
        }

        if ($halfDay == true) {
            $price = $price / 2;
        }

        if ($reducedPrice == true) {
            $price = $price - 10;
        }

        return $price;
    }

    /**
     * Set order
     *
     * @param \Louvre\ReservationBundle\Entity\Order $order
     *
     * @return Ticket
     */
    public function setOrder(\Louvre\ReservationBundle\Entity\Order $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \Louvre\ReservationBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
}
