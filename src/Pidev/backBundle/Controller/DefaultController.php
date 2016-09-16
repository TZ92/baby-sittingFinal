<?php

namespace Pidev\backBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PidevbackBundle:Default:index.html.twig', array('name' => $name));
    }
}
