<?php

namespace Louvre\ReservationBundle\Controller;

use Louvre\ReservationBundle\Entity\Order;
use Louvre\ReservationBundle\Entity\Ticket;
use Louvre\ReservationBundle\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{
    public function indexAction(Request $request) {

        $order = new Order();
        $form = $this->get('form.factory')->create(OrderType::class, $order);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            // Calcul tarifs
            // L'objet hydraté par le formulaire est mis dans la session
            $session = $request->getSession();
            $session->set('order', $order);
            // Redirige vers la page de recap
            return $this->redirectToRoute('recapitulatif');
        }

        return $this->render('LouvreReservationBundle:Reservation:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function recapAction(Request $request) {

        $session = $request->getSession();
        $order = $session->get('order');

        // Penser à détruire la session une fois fini

        return $this->render('LouvreReservationBundle:Reservation:recapitulatif.html.twig', array(
            'email' => $order->getEmail(),
        ));
    }

    public function cgvAction() {
        return $this->render('LouvreReservationBundle:Reservation:cgv.html.twig');
    }
}
