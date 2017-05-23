<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('PhoneNumber', null, array(
			'label' => 'Telefoon nummer',
 		));
	}

	public function getParent()
	{
		return 'FOS\UserBundle\Form\Type\ProfileFormType';
	}

	public function getBlockPrefix()
	{
		return 'fos_user_profile';
	}

	public function getPhoneNumber()
	{
		return $this->getBlockPrefix();
	}
}