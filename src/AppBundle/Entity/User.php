<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 * @Assert\NotBlank(message="Please enter your name.", groups={"Profile"})
	 * @Assert\Length(
	 *     min=3,
	 *     max=255,
	 *     minMessage="The name is too short.",
	 *     maxMessage="The name is too long.",
	 *     groups={"Profile"}
	 * )
	 */
	protected $name;

	/**
	 * @Assert\NotBlank(message="vul een wachtwoord in", groups={"Registration", "ResetPassword", "ChangePassword"})
	 * @Assert\Length(min=6,
	 *     minMessage="Wachtwoord is te kort!",
	 *     groups={"Registration", "Profile", "ResetPassword", "ChangePassword"})
	 */
	protected $plainPassword;


	/**
	 * @ORM\Column(type="string", length=10)
	 *
	 * @Assert\NotBlank(message="vul een telefoon nummer in!", groups={"Profile"})
	 * @Assert\Length(min=10,
	 *     minMessage="Telefoon nummer is te kort!",
	 *     groups={"Profile"})
	 */
	protected $phoneNumber;

    /**
     * @ORM\Column(type="integer")
     */
    protected $loginType;

    /**
     * Set loginType
     *
     * @param string $loginType
     *
     * @return User
     */

    public function setloginType($loginType)

    {
        $this->loginType = $loginType;
        return $this;
    }

    /**
     * Get loginType
     *
     * @return string
     */

    public function getloginType()

    {
        return $this->loginType;
    }

    public function setPhoneNumber($phoneNumber)

    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
}