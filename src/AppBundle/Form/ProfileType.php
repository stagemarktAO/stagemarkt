<?php

namespace AppBundle\Form;


use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class ProfileType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$constraintsOptions = array(
			'message' => 'Wachtwoord incorrect',
		);

		if (!empty($options['validation_groups'])) {
			$constraintsOptions['groups'] = array(reset($options['validation_groups']));
		}

		$builder
			->add('current_password', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'), array(
			'label' => 'Huidige wachtwoord',
			'translation_domain' => 'FOSUserBundle',
			'mapped' => false,
			'constraints' => new UserPassword($constraintsOptions),
			))
			->add('phoneNumber', null, array(
				'label' => 'Telefoon nummer'
			))
			->add('name', null, array(
				'label' => 'Volledige naam  '
			))
			->add('username', null, array(
				'label' => 'Gebruikersnaam',
				'translation_domain' => 'FOSUserBundle'
			))
			->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array(
				'label' => 'Email adres',
				'translation_domain' => 'FOSUserBundle'
			));
	}

	public function getParent()
	{
		return 'FOS\UserBundle\Form\Type\ProfileFormType';
	}
}