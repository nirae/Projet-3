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

        // Si le token est dans la session
        if ($session->get('token')) {
            // Recupere le token et hydrate l'entité
            $token = $session->get('token');
            $order->setStripeToken($token);

            // persist et flush
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();
            // ToDo : email
            
        }

        // Si le token a été reçu, on envoi un email
        // et on flush la commande
        // Et envoi d'un message flash de remerciement


        return $this->render('LouvreReservationBundle:Reservation:recapitulatif.html.twig', array(
            // Test front
            'order' => $order,
            'dayVisit' => date('d/m/Y', $order->getDayVisit()->getTimestamp()),
        ));
    }

    public function cgvAction() {
        return $this->render('LouvreReservationBundle:Reservation:cgv.html.twig');
    }

    public function ajaxPostAction(Request $request) {
        // Récuperer le token stripe via Ajax
        $token = $request->get('id');

        $session = $request->getSession();
        $session->set('token', $token);

        return $this->json(["code" => 1]);

    }
}
