<?php

namespace Louvre\ReservationBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class HalfDayValidValidator extends ConstraintValidator {

    // Prend en paramètre la date de réservation
    public function validate($value, Constraint $constraint) {

        $dayVisit = date('d/m/Y', $value->getTimestamp());
        $hourToday = date('H');
        $today = date('d/m/Y');

        if ($halfDay == true && $today == $dayVisit) {
            if (intval($hourToday) >= 14) {
                $this->context->addViolation($constraint->message);
            }
        }
    }
}
