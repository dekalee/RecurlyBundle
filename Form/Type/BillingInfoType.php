<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BillingInfoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'firstName',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label' => 'First Name',
            ]
        );
        $builder->add(
            'lastName',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label' => 'Last Name',
            ]
        );
        $builder->add(
            'address1',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label' => 'Address 1',
            ]
        );
        $builder->add(
            'address2',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label' => 'Address 2',
                'required' => false,
            ]
        );
        $builder->add(
            'city',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label' => 'City',
            ]
        );
        $builder->add(
            'state',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label'       => 'State',
                'required' => false,
            ]
        );
        $builder->add(
            'country',
            'Symfony\Component\Form\Extension\Core\Type\CountryType',
            [
                'empty_value' => 'Country&hellip;',
                'label'       => 'Country'
            ]
        );
        $builder->add(
            'zip',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label' => 'ZIP',
            ]
        );
        $builder->add(
            'vatNumber',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label' => 'VAT Number (if applicable)',
                'required' => false,
            ]
        );
        $builder->add(
            'number',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label' => 'Card Number',
            ]
        );
        $builder->add(
            'month',
            'Moovly\RecurlyBundle\Form\Type\MonthType',
            [
                'empty_value' => 'Month&hellip;',
                'label'       => 'Expiration Date (Month)'
            ]
        );
        $builder->add(
            'year',
            'Moovly\RecurlyBundle\Form\Type\YearType',
            [
                'empty_value' => 'Year&hellip;',
                'label'       => 'Expiration Date (Year)'
            ]
        );
        $builder->add(
            'verificationValue',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label' => 'Security Code (CVV)',
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'Recurly\Model\BillingInfo',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'billingInfo';
    }
}