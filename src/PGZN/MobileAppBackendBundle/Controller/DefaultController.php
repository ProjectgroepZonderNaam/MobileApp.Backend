<?php

namespace PGZN\MobileAppBackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PGZNMobileAppBackendBundle:Default:index.html.twig');
    }
}
