<?php

namespace Louvre\ReservationBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntiBookingClosedDayValidator extends ConstraintValidator {

    private $closedDays = ['Sun', 'Tue'];

    // Prend en paramètre la date de réservation
    public function validate($value, Constraint $constraint) {
        $dayVisit = date('D', $value->getTimestamp());
        $closedDays = $this->getClosedDays();
        
        foreach ($closedDays as $closedDay) {
            if ($dayVisit == $closedDay) {
                // Déclenche l'erreur
                $this->context->addViolation($constraint->message);
            }
        }
    }

    public function getClosedDays() {
        return $this->closedDays;
    }
}
