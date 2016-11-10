<?php

namespace Louvre\ReservationBundle\Controller;

use Louvre\ReservationBundle\Entity\Order;
use Louvre\ReservationBundle\Entity\Ticket;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ReservationController extends Controller
{
    /**
     * @Template("LouvreReservationBundle:Reservation:index.html.twig")
     */
    public function indexAction(Request $request) {

        $bookingManager = $this->get('louvre_reservation.bookingmanager');

        $form = $bookingManager->indexManager($request);
        // Si on reçoit le formulaire et que tout s'est bien passé
        if ($bookingManager->formPostProcessing($request, $form)) {
            return $this->redirectToRoute('recapitulatif');
        }

        return array('form' => $form->createView());
    }

    /**
     * @Template("LouvreReservationBundle:Reservation:recapitulatif.html.twig")
     */
    public function recapAction(Request $request) {

        $order = $request->getSession()->get('order');

        $bookingManager = $this->get('louvre_reservation.bookingmanager');
        // Si on reçoit une requette AJAX et que tout s'est bien passé
        if ($bookingManager->tokenAjaxProcessing($request, $order)) {
            return $this->json(["code" => 1]);
        }

        return array('order' => $order);
    }

    /**
     * @Template("LouvreReservationBundle:Reservation:cgv.html.twig")
     */
    public function cgvAction() {
        return;
    }
}
