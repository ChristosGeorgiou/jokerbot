<?php

namespace Geo\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('user', new UserType())
          ->add('terms','checkbox',array(
            'property_path' => 'termsAccepted'
          ))
          ->add('Register', 'submit');
    }

    public function getName()
    {
        return 'registration';
    }
}
