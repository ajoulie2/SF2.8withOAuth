<?php
// src/OC/UserBundle/Controller/SecurityController.php;

namespace security\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('securityUserBundle:Default:index.html.twig');
    }
}