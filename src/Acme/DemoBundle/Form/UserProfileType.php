<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class UserProfileType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('dateOfBirth', null, [
                'widget'=> 'single_text',
                'label' => 'Date of birth',
                'format' => 'dd.MM.yyyy',
                'attr' => [
                    'class' => 'datepicker'
                ]
            ])
        ;
    }

    public function getName()
    {
        return 'acme_user_profile';
    }
}
