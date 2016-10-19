<?php

namespace Louvre\ReservationBundle\BookingValidation;

class BookingValidation {

    $dayVisitTimestamp = $dayVisit->getTimestamp();
    $todayTimestamp = new \DateTime()->getTimestamp();
    $holidays = ['01/05', '01/11', '25/12'];
    $closedDays = ['Sun', 'Tue'];

    // FAIT
    // Pas de reservations pendants les jours fériés
    public function holidayValid($dayVisit) {
        $dayVisit = date('d/m', $dayVisit->getTimestamp());
        foreach ($holidays as $holiday) {
            if ($dayVisit == $holiday) {
                return false;
            }
        }
    }
    // FAIT
    // Pas de réservations les mardis et dimanche
    public function closedDayValid($dayVisit) {
        $dayVisit = date('D', $dayVisit->getTimestamp());
        foreach ($closedDays as $closedDay) {
            if ($dayVisit == $closedDay) {
                return false;
            }
        }
    }
    // FAIT
    // Pas de réservations pour les jours passés
    public function pastDayValid($dayVisit) {
        $dayVisitTs = $dayVisit->getTimestamp();
        $todayTs = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        if (intval($dayVisitTs) < intval($todayTs)) {
            return false;
        }
    }
    // Pas de billets demi-journée pour le jour meme si 14h passé
    public function dayValid($dayVisit, $halfDay) {
        $dayVisit = date('d/m/Y', $dayVisit->getTimestamp());
        $hourToday = date('H');
        $today = date('d/m/Y');
        if ($halfDay = true && $today == $dayVisit) {
            if (intval($hourToday) >= 14) {
                return false;
            }
        }
    }
    // Impossible de réserver les jours ou 1000 billets sont réservés


}
