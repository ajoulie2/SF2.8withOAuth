<?php

namespace security\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/toto")
     */
    public function indexAction()
    {
        return $this->render('securityUserBundle:Default:index.html.twig');
    }
}
