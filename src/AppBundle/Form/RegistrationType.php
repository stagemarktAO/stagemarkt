<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
        $builder->add('loginType');
        $builder->add('name');
        $builder->add('phoneNumber');
    }

	public function getParent()
	{
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
	}


}
