<?php

namespace Tests\Louvre\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    private $client;
    private $crawler;
    private $form;
    private $values;

    protected function setUp() {

        $this->client = static::createClient();
        $this->crawler = $this->client->request('GET', '/');
        $this->form = $this->crawler->selectButton('Valider')->form();
        $this->values = $this->form->getPhpValues();
        //Pré-remplissage du formulaire -> datas valides
        $this->form['louvre_reservationbundle_order']['dayVisit']['day']->select('30');
        $this->form['louvre_reservationbundle_order']['dayVisit']['month']->select('12');
        $this->form['louvre_reservationbundle_order']['dayVisit']['year']->select('2017');
        $this->form['louvre_reservationbundle_order']['halfDay']->untick();
        $this->form['louvre_reservationbundle_order']['email']->setValue('ndubouilh@gmail.com');
        // Billet 1
        $this->values['louvre_reservationbundle_order']['tickets'][0]['name'] = 'Durand';
        $this->values['louvre_reservationbundle_order']['tickets'][0]['firstName'] = 'Jean-Pierre';
        $this->values['louvre_reservationbundle_order']['tickets'][0]['reducedPrice'] = false;
        $this->values['louvre_reservationbundle_order']['tickets'][0]['birthDate']['day'] = '23';
        $this->values['louvre_reservationbundle_order']['tickets'][0]['birthDate']['month'] = '04';
        $this->values['louvre_reservationbundle_order']['tickets'][0]['birthDate']['year'] = '1995';
        $this->values['louvre_reservationbundle_order']['tickets'][0]['country'] = 'FR';
    }

    public function testIndex() {

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        // Si la page est bien affichée
        $this->assertContains(
            '<title>Billeterie Louvre -  Réservation</title>',
            $this->client->getResponse()->getContent()
        );
        // Si le formulaire est affiché
        $this->assertContains(
            '<form name="louvre_reservationbundle_order" method="post">',
            $this->client->getResponse()->getContent()
        );
    }

    public function testGoodDatas() {

        // Ajout deuxième billet
        $this->values['louvre_reservationbundle_order']['tickets'][1]['name'] = 'Dupond';
        $this->values['louvre_reservationbundle_order']['tickets'][1]['firstName'] = 'Pierre';
        $this->values['louvre_reservationbundle_order']['tickets'][1]['reducedPrice'] = false;
        $this->values['louvre_reservationbundle_order']['tickets'][1]['birthDate']['day'] = '23';
        $this->values['louvre_reservationbundle_order']['tickets'][1]['birthDate']['month'] = '04';
        $this->values['louvre_reservationbundle_order']['tickets'][1]['birthDate']['year'] = '1998';
        $this->values['louvre_reservationbundle_order']['tickets'][1]['country'] = 'FR';
        //Enregistre les datas
        $this->crawler = $this->client->request(
            $this->form->getMethod(),
            $this->form->getUri(),
            $this->values,
            $this->form->getPhpFiles()
        );
        // Si il y a bien eu 2 tickets d'ajoutés
        $this->assertEquals(2, $this->crawler->filter('.ticket')->count());
        // Valide le formulaire
        $this->client->submit($this->form);
        // Si le client est redirigé vers la page de recap
        $this->assertTrue($this->client->getResponse()->isRedirect('/recapitulatif'));
    }

    public function testBookingClosedDay() {

        // Modification du formulaire
        // Jour de réservation -> Mardi 26/12/2017
        $this->form['louvre_reservationbundle_order']['dayVisit']['day']->select('26');
        $this->form['louvre_reservationbundle_order']['dayVisit']['month']->select('12');
        //Enregistre les datas
        $this->crawler = $this->client->request(
            $this->form->getMethod(),
            $this->form->getUri(),
            $this->values,
            $this->form->getPhpFiles()
        );
        // Valide le formulaire
        $this->client->submit($this->form);
        // Si le client n'est pas redirigé vers la page de recap
        $this->assertFalse($this->client->getResponse()->isRedirect('/recapitulatif'));

        // Jour de réservation -> Dimanche 31/12/2017
        $this->form['louvre_reservationbundle_order']['dayVisit']['day']->select('31');
        //Enregistre les datas
        $this->crawler = $this->client->request(
            $this->form->getMethod(),
            $this->form->getUri(),
            $this->values,
            $this->form->getPhpFiles()
        );
        // Valide le formulaire
        $this->client->submit($this->form);
        // Si le client n'est pas redirigé vers la page de recap
        $this->assertFalse($this->client->getResponse()->isRedirect('/recapitulatif'));
    }

    public function testBookingHoliday() {
        // Modification du formulaire
        // Jour de réservation -> 01/05/2017
        $this->form['louvre_reservationbundle_order']['dayVisit']['day']->select('01');
        $this->form['louvre_reservationbundle_order']['dayVisit']['month']->select('05');
        //Enregistre les datas
        $this->crawler = $this->client->request(
            $this->form->getMethod(),
            $this->form->getUri(),
            $this->values,
            $this->form->getPhpFiles()
        );
        // Valide le formulaire
        $this->client->submit($this->form);
        // Si le client n'est pas redirigé vers la page de recap
        $this->assertFalse($this->client->getResponse()->isRedirect('/recapitulatif'));

        // Jour de réservation -> 01/11/2017
        $this->form['louvre_reservationbundle_order']['dayVisit']['day']->select('01');
        $this->form['louvre_reservationbundle_order']['dayVisit']['month']->select('11');
        //Enregistre les datas
        $this->crawler = $this->client->request(
            $this->form->getMethod(),
            $this->form->getUri(),
            $this->values,
            $this->form->getPhpFiles()
        );
        // Valide le formulaire
        $this->client->submit($this->form);
        // Si le client n'est pas redirigé vers la page de recap
        $this->assertFalse($this->client->getResponse()->isRedirect('/recapitulatif'));

        // Jour de réservation -> 01/05/2017
        $this->form['louvre_reservationbundle_order']['dayVisit']['day']->select('25');
        $this->form['louvre_reservationbundle_order']['dayVisit']['month']->select('12');
        //Enregistre les datas
        $this->crawler = $this->client->request(
            $this->form->getMethod(),
            $this->form->getUri(),
            $this->values,
            $this->form->getPhpFiles()
        );
        // Valide le formulaire
        $this->client->submit($this->form);
        // Si le client n'est pas redirigé vers la page de recap
        $this->assertFalse($this->client->getResponse()->isRedirect('/recapitulatif'));
    }

    public function testBookingPastDay() {
        // Modification du formulaire
        // Jour de réservation -> 15/11/2016
        $this->form['louvre_reservationbundle_order']['dayVisit']['day']->select('15');
        $this->form['louvre_reservationbundle_order']['dayVisit']['month']->select('11');
        $this->form['louvre_reservationbundle_order']['dayVisit']['year']->select('2016');
        //Enregistre les datas
        $this->crawler = $this->client->request(
            $this->form->getMethod(),
            $this->form->getUri(),
            $this->values,
            $this->form->getPhpFiles()
        );
        // Valide le formulaire
        $this->client->submit($this->form);
        // Si le client n'est pas redirigé vers la page de recap
        $this->assertFalse($this->client->getResponse()->isRedirect('/recapitulatif'));
    }

}
