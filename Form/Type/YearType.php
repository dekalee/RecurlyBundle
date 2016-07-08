<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType as BaseAbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class YearType extends BaseAbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $year    = date('Y');
        $choices = array();
        for ($count = $year; $count <= $year + 10; $count++) {
            $choices[$count] = $count;
        }

        $resolver->setDefaults([
            'choices_as_values' => true,
            'choices' => $choices,
        ]);
    }

    public function getParent()
    {
        return 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
    }

    public function getBlockPrefix()
    {
        return 'year';
    }
}