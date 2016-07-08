<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccountType extends AbstractType
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
            'companyName',
            'Symfony\Component\Form\Extension\Core\Type\TextType',
            [
                'label' => 'Company',
            ]
        );
        $builder->add('billingInfo', new BillingInfoType());
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'Recurly\Model\Account',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'account';
    }
}