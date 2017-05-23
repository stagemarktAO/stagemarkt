<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class company extends Controller
{
    /**
     * @Route("/company")
     */
    public function showAction()
    {
        return $this->render('company/dashboard.html', array(
            'tittle' => 'Dashboard',
        ));
    }
}