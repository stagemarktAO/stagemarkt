<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$this->buildForm($builder, $options);

		$builder->add('PhoneNumber', null, array(
			'label' => 'Telefoon nummer',
			'translation_domain' => 'FOSUserBundle'
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