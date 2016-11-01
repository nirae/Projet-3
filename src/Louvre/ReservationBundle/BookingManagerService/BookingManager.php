<?php

namespace Louvre\ReservationBundle\BookingManagerService;

use Doctrine\ORM\EntityManagerInterface;
use Louvre\ReservationBundle\Form\OrderType;

class BookingManager {

    private $mailer;
    private $templating;
    private $em;
    private $formfactory;

    public function __construct(\Swift_Mailer $mailer, $templating, EntityManagerInterface $em, $formfactory) {

        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->em = $em;
        $this->formfactory = $formfactory;
    }


    public function formPostProcessing($request, $form, $order) {

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            // Relation entre entités et ajout prix total
            $this->setOrderOnTickets($order, $form);
            // L'objet hydraté par le formulaire est mis dans la session
            $request->getSession()->set('order', $order);

            return true;
        }
        return;
    }

    public function tokenAjaxProcessing($request, $order) {
        if ($request->isMethod('POST')) {
            // Récupère le token envoyé, envoi mail et flush la commande
            $token = $this->getStripeToken($request);
            // Hydrate order avec le token
            $order->setStripeToken($token);
            $this->sendConfirmation($order);
            $this->flushEntity($order);

            return true;
        }
        return;
    }

    public function createForm($order) {

        return $this->formfactory->create(OrderType::class, $order);
    }

    // Envoi un email de confirmation
    private function sendConfirmation($order) {
        // Construit le message
        $message = \Swift_Message::newInstance()
            ->setSubject('Confirmation de réservation')
            ->setFrom('louvre@nicolasdubouilh.fr')
            ->setTo($order->getEmail())
            ->setBody(
                $this->templating->render('LouvreReservationBundle:Reservation:email.html.twig', array(
                    'order' => $order,
                )),
                'text/html'
            )
        ;
        // Envoi du message
        $this->mailer->send($message);

        return true;
    }

    // Récupère le token stripe via AJAX
    // Hydrate l'entité avec le token
    private function getStripeToken($request) {
        $tokenId = $request->request->all();
        $token = $tokenId['id'];

        return $token;
    }

    // Persist et flush une entité
    private function flushEntity($entity) {
        $this->em->persist($entity);
        $this->em->flush();

        return true;
    }

    // Récupère un array de tickets
    // Hydrate chaque ticket avec l'order
    // Ajoute le prix du ticket au total de l'Order
    // à chaque tour de boucle
    private function setOrderOnTickets($order, $form) {
        $tickets = $form->getData()->getTickets();
        foreach ($tickets as $ticket) {
            $ticket->setOrder($order);
            $order->addTotal($ticket->getTicketPrice());
        }
        return true;
    }
}
