<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType as BaseAbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StateType extends BaseAbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices_as_values' => true,
            'choices' => [
                 "Alabama" => "AL",
                 "Alaska" => "AK",
                 "Arizona" => "AZ",
                 "Arkansas" => "AR",
                 "California" => "CA",
                 "Colorado" => "CO",
                 "Connecticut" => "CT",
                 "Delaware" => "DE",
                 "Florida" => "FL",
                 "Georgia" => "GA",
                 "Hawaii" => "HI",
                 "Idaho" => "ID",
                 "Illinois" => "IL",
                 "Indiana" => "IN",
                 "Iowa" => "IA",
                 "Kansas" => "KS",
                 "Kentucky" => "KY",
                 "Louisiana" => "LA",
                 "Maine" => "ME",
                 "Maryland" => "MD",
                 "Massachusetts" => "MA",
                 "Michigan" => "MI",
                 "Minnesota" => "MN",
                 "Mississippi" => "MS",
                 "Missouri" => "MO",
                 "Montana" => "MT",
                 "Nebraska" => "NE",
                 "Nevada" => "NV",
                 "New Hampshire" => "NH",
                 "New Jersey" => "NJ",
                 "New Mexico" => "NM",
                 "New York" => "NY",
                 "North Carolina" => "NC",
                 "North Dakota" => "ND",
                 "Ohio" => "OH",
                 "Oklahoma" => "OK",
                 "Oregon" => "OR",
                 "Pennsylvania" => "PA",
                 "Rhode Island" => "RI",
                 "South Carolina" => "SC",
                 "South Dakota" => "SD",
                 "Tennessee" => "TN",
                 "Texas" => "TX",
                 "Utah" => "UT",
                 "Vermont" => "VT",
                 "Virginia" => "VA",
                 "Washington" => "WA",
                 "West Virginia" => "WV",
                 "Wisconsin" => "WI",
                 "Wyoming" => "WY",
            ],
        ]);
    }

    public function getParent()
    {
        return 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
    }

    public function getBlockPrefix()
    {
        return 'state';
    }
}