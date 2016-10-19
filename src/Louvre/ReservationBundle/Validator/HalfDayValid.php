<?php

namespace Louvre\ReservationBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class HalfDayValid extends Constraint {

    public $message = "Il n'est pas possible de réserver un billet demi-journée pour le jour même une fois 14h passée";
}
