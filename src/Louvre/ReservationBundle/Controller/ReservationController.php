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
            // Ne devrait pas avoir besoin de le faire
            $tickets = $order->getTickets();
            foreach ($tickets as $ticket) {
                $ticket->setOrder($order);
            }
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

        dump($order);

        if ($request->isMethod('POST')) {
            // Récuperer le token stripe via Ajax
            $tokenId = $request->request->all();
            $token = $tokenId['id'];
            $order->setStripeToken($token);
            // Email
            $message = \Swift_Message::newInstance()
                ->setSubject('Confirmation de réservation')
                ->setFrom('ndubouilh@gmail.com')
                ->setTo($order->getEmail())
                ->setBody(
                    $this->render('LouvreReservationBundle:Reservation:email.html.twig', array(

                    ))
                )
            ;
            $this->get('mailer')->send($message);
            // Persist et flush
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();
            return $this->json(["code" => 1]);
        }

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
        $tokenId = $request->request->all();
        $token = $tokenId['id'];

        //$session = $request->getSession();
        //$order = $session->get('order');
        //$order->setStripeToken($token['id']);

        //$em = $this->getDoctrine()->getManager();
        //$em->persist($order);
        //$em->flush();

        return $this->json(["code" => 1, "token" => $token]);
    }
}
