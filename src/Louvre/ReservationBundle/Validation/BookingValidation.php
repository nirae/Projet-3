<?php

namespace Louvre\ReservationBundle\BookingValidation;

class BookingValidation {
    // Impossible de reserver pour les jours passés et vacances
    // Pas de billets demi-journée pour le jour meme si 14h passé
    public function dayValid($dayVisit, $halfDay = false) {

        $today = date('d/m/Y');
        $holidays = ['01/05', '01/11', '25/12'];
        



    }
    // Impossible de réserver les jours ou 1000 billets sont réservés

}
