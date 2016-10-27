<?php

namespace Louvre\ReservationBundle\Controller;

use Louvre\ReservationBundle\Entity\Order;
use Louvre\ReservationBundle\Entity\Ticket;
use Louvre\ReservationBundle\Form\OrderType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{
    public function indexAction(Request $request) {
        $order = new Order();
        $form = $this->get('form.factory')->create(OrderType::class, $order);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            // Ne devrait pas avoir besoin de le faire
            $tickets = $order->getTickets();
            foreach ($tickets as $ticket) {
                $ticket->setOrder($order);
            }
            // A cause du problème d'en haut
            // Calcul et ajout du prix total
            $order->addTotal($order->getTickets());
            // L'objet hydraté par le formulaire est mis dans la session
            $request->getSession()->set('order', $order);
            // Redirige vers la page de recap
            return $this->redirectToRoute('recapitulatif');
        }

        return $this->render('LouvreReservationBundle:Reservation:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function recapAction(Request $request) {

        $order = $request->getSession()->get('order');

        dump($order);

        if ($request->isMethod('POST')) {
            // Récupère le token envoyé, envoi mail et flush la commande
            $this->get('louvre_reservation.orderfinalization')->final($request, $order);
            // Code de retour pour validation en JS
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
}
