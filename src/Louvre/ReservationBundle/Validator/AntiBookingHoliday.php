<?php

namespace Louvre\ReservationBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class AntiBookingHoliday extends Constraint {

    public $message = "Le musée est fermé ce jour la";
}
