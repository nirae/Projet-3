<?php

namespace Louvre\ReservationBundle\BookingManagerService;

use Doctrine\ORM\EntityManagerInterface;
use Louvre\ReservationBundle\Form\OrderType;
use Louvre\ReservationBundle\Entity\Order;

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

    // Instancie l'entité
    // Créé le formulaire
    public function indexManager($request) {

        $order = new Order();
        $form = $this->createForm($order);
        $request->getSession()->set('order', $order);

        return $form;
    }

    public function formPostProcessing($request, $form) {

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $order = $request->getSession()->get('order');
            // Relation entre entités et ajout prix total
            $this->setOrderOnTickets($order);
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
    // Calcule l'age du visiteur pour chaque ticket
    // Calcule le prix en fonction de l'age pour chaque ticket
    // Hydrate le ticket avec le prix
    // Ajoute le prix du ticket au total de l'Order
    // à chaque tour de boucle
    private function setOrderOnTickets($order) {
        $tickets = $order->getTickets();
        foreach ($tickets as $ticket) {
            $age = $this->calculAge($ticket->getBirthDate());
            $prix = $this->calculPrice($age, $ticket->getReducedPrice(), $order->getHalfDay());
            $ticket->setTicketPrice($prix);

            $ticket->setOrder($order);
            $order->addTotal($ticket->getTicketPrice());
        }
        return true;
    }

    // Calcul de l'age
    public function calculAge($birthDate)
    {
        // Découpage date de naissance
        $year =  intval(date('Y', $birthDate->getTimestamp()));
        $month = intval(date('m', $birthDate->getTimestamp()));
        $day = intval(date('d', $birthDate->getTimestamp()));

        // Découpage date actuelle
        $y = intval(date('Y'));
        $m = intval(date('m'));
        $d = intval(date('d'));

        if (($month < $m) || (($month == $m) && ($day <= $d))) {
            $age = $y - $year;
            return $age;
        } else {
            $age = ($y - $year) - 1;
            return $age;
        }

    }

    // Calcul du tarif
    public function calculPrice($age, $reducedPrice, $halfDay) {
        $price = 16;

        if ($age < 4) {
            $price = 0;
        } elseif ($age > 4 && $age < 12) {
            $price = 8;
        } elseif ($age > 60) {
            $price = 12;
        }

        if ($halfDay == true) {
            $price = $price / 2;
        }

        if ($reducedPrice == true) {
            $price = $price - 10;
        }

        return $price;
    }
}
