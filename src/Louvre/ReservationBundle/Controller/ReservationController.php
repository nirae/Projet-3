<?php

namespace Louvre\ReservationBundle\Controller;

use Louvre\ReservationBundle\Entity\Order;
use Louvre\ReservationBundle\Entity\Ticket;
use Louvre\ReservationBundle\Entity\Booking;
use Louvre\ReservationBundle\Form\OrderType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{
    public function indexAction(Request $request) {
        $booking = new Booking();
        $order = new Order();
        $form = $this->get('form.factory')->create(OrderType::class, $order);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            /* // Validation pas plus de 1000 places
            // Enregistrement de la date et du nb de places dans l'entité de gestion de reservation
            $booking->setDate($order->getDayVisit());
            $booking->setNbTickets(count($order->getTickets()));
            // persist et flush de booking
            */
            // Calcul et ajout du prix total
            $order->addTotal($order->getTickets());
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
            //$token = $request->get('tokenValid');
            $this->addFlash('notice', 'Recu');
         }

        // Si le token a été reçu, on envoi un email
        // et on flush la commande
        // Et envoi d'un message flash de remerciement


        return $this->render('LouvreReservationBundle:Reservation:recapitulatif.html.twig', array(
            // Test d'affichage
            'order' => $order,
            'dayVisit' => date('d/m/Y', $order->getDayVisit()->getTimestamp()),
        ));
    }

    public function cgvAction() {
        return $this->render('LouvreReservationBundle:Reservation:cgv.html.twig');
    }
}
