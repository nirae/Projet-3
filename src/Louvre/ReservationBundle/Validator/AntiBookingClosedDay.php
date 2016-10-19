<?php

namespace Louvre\ReservationBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class AntiBookingClosedDay extends Constraint {

    public $message = "Il n'est pas possible de réserver pour ce jour";
}
