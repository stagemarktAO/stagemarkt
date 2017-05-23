<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class student extends Controller
{
    /**
     * @Route("/student")
     */
    public function showAction()
    {
        return $this->render('student/dashboard.html', array(
            'tittle' => 'Dashboard',
        ));
    }
}