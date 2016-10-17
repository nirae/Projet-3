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
            // Calcul tarifs + validation des critères
            // + hydratation entité
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

        // Récuperer le token stripe via Ajax
         if ($request->isXmlHttpRequest()) {

         }

        // Si le token a été reçu, on envoi un email
        // et on flush la commande
        // Et envoi d'un message flash de remerciement


        return $this->render('LouvreReservationBundle:Reservation:recapitulatif.html.twig', array(
            // Test d'affichage
            'email' => $order->getEmail(),
            'dayVisit' => date('d/m/Y', $order->getDayVisit()->getTimestamp()),
        ));
    }

    public function cgvAction() {
        return $this->render('LouvreReservationBundle:Reservation:cgv.html.twig');
    }
}
