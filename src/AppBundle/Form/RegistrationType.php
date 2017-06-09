<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
        $builder->add('loginType', ChoiceType::class, array(
        	'choices' => [
        		'Bedrijf' => 0,
		        'Student' => 1
	        ]
        ));
        $builder->add('name');
        $builder->add('phoneNumber');
    }

	public function getParent()
	{
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
	}


}
