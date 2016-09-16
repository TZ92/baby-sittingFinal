<?php

namespace Pidev\GrapheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PidevGrapheBundle:Default:index.html.twig', array('name' => $name));
    }
}
