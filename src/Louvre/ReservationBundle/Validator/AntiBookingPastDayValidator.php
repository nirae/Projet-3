<?php

namespace Louvre\ReservationBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntiBookingPastDayValidator extends ConstraintValidator {

    // Prend en paramètre la date de réservation
    public function validate($value, Constraint $constraint) {

        $dayVisitTs = $value->getTimestamp();
        $todayTs = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

        if (intval($dayVisitTs) < intval($todayTs)) {
            // Déclenche l'erreur
            $this->context->addViolation($constraint->message);
        }
    }
}
