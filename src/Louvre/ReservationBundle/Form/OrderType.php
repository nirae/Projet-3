<?php

namespace Louvre\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Louvre\ReservationBundle\Form\TicketType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dayVisit', DateType::class, array(
                'format' => 'dd-MM-yyyy',
                'years' => range(date('Y'), date('Y') + 1),
                'label' => 'Jour de la visite',
            ))
            ->add('halfDay', CheckboxType::class, array(
                'label' => 'Billet demi-journée',
                'required' => false,
            ))
            ->add('email', EmailType::class, array(
                'label' => 'Email',
            ))
            ->add('tickets', CollectionType::class, array(
                'label_attr' => array('id' => 'titre-billets'),
                'label' => 'Billets : ',
                'entry_type' => TicketType::class,
                'allow_add' => true,
                'allow_delete' => true
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Valider',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Louvre\ReservationBundle\Entity\Order'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'louvre_reservationbundle_order';
    }


}
