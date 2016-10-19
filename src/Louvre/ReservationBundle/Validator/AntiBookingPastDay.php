<?php

namespace Louvre\ReservationBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class AntiBookingPastDay extends Constraint {

    public $message = "Il n'est pas possible de réserver pour un jour passé";
}
