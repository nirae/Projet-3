<?php

namespace Louvre\ReservationBundle\BookingValidation;

class BookingValidation {

    // Pas de reservations pendants les jours fériés
    public function holidayValid($dayVisit) {

    }
    // Pas de réservations les mardis et dimanche
    public function closedDayValid($dayVisit) {

    }
    // Pas de réservations pour les jours passés
    public function pastDayValid($dayVisit) {

    }
    // Pas de billets demi-journée pour le jour meme si 14h passé
    public function dayValid($dayVisit, $halfDay = false) {

        $dayVisitTimestamp = $dayVisit->getTimestamp();
        $todayTimestamp = new \DateTime()->getTimestamp();
        $holidays = ['01/05', '01/11', '25/12'];
        $closedDay = ['Sun', 'Tue'];

        if(date('D', $dayVisitTimestamp) == date('D', $todayTimestamp))
        {

        }


    }
    // Impossible de réserver les jours ou 1000 billets sont réservés

}
