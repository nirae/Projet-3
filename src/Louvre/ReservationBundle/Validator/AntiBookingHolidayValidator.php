<?php

namespace Louvre\ReservationBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntiBookingHolidayValidator extends ConstraintValidator {

    private $holidays = ['01/05', '01/11', '25/12'];

    // Prend en paramètre la date de réservation
    public function validate($value, Constraint $constraint) {
        $dayVisit = date('d/m', $value->getTimestamp());
        $holidays = $this->getHolidays();
        foreach ($holidays as $holiday) {
            if ($dayVisit == $holiday) {
                // Déclenche l'erreur
                $this->context->addViolation($constraint->message);
            }
        }
    }

    public function getHolidays() {
        return $this->holidays;
    }
}
