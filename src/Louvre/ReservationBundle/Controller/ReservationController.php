<?php

namespace Louvre\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{
    public function indexAction() {
        return $this->render('LouvreReservationBundle:Reservation:index.html.twig');
    }

    public function recapAction() {
        return $this->render('LouvreReservationBundle:Reservation:recapitulatif.html.twig');
    }

    public function cgvAction() {
        return $this->render('LouvreReservationBundle:Reservation:cgv.html.twig');
    }
}
