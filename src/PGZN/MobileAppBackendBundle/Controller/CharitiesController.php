<?php

namespace PGZN\MobileAppBackendBundle\Controller;

use \Doctrine\ORM\EntityManager;
use PGZN\MobileAppBackendBundle\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;   
use FOS\RestBundle\View\View;   

/**
* @Route(service="PGZNMobileAppBackend.CharitiesController")
*/
class CharitiesController extends Controller
{
    public function getCharitiesAction()
    {
        $data = $this->getDoctrine()->getRepository('PGZNMobileAppBackendBundle:Charities')->findAll();
        
         $view = View::create()
          ->setStatusCode(200)
          ->setFormat('json')
          ->setData($data);
        return $this->get('fos_rest.view_handler')->handle($view);

    }

}

?>
