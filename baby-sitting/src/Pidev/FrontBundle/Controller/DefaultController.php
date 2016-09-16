<?php

namespace Pidev\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PidevFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}
