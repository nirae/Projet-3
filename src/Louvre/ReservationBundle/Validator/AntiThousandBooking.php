<?php

namespace Louvre\ReservationBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class AntiThousandBooking extends Constraint
{
    public $message = "Il y a déjà eu plus de 1000 réservations pour cette date. Nous avons atteint nos limites...";

    public function validateBy()
    {
        return 'anti_thousand_booking';
    }
}
