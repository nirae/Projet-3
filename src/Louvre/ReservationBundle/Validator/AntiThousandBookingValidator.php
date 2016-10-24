<?php

namespace Louvre\ReservationBundle\Validator;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntiThousandBookingValidator extends ConstraintValidator
{

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function validate($value, Constraint $constraint)
    {

        // Récupère les entités avec le meme jour de réservation
        
        $days = $this->em
            ->getRepository('LouvreReservationBundle:Order')
            ->findBy(array('dayVisit' => $value))
        ;

        // Si il n'y a pas d'entités avec le même jour de réservation
        // On arrête tout de suite
        if (empty($days)) {
            return;
        }

        // Initialisation du nombre de reservation à 0
        $nbReservations = 0;

        // Récupère le nombre de billets pour chaque entité récupérée
        foreach ($days as $day) {
            // Compte le nombre de billets liés
            $nbTickets = count($day->getTickets());
            // Ajoute ce nombre au total
            $nbReservations += $nbTickets;
        }

        if ($nbReservations > 1000) {
            // Déclenche l'erreur
            $this->context->addViolation($constraint->message);
        }
    }
}
