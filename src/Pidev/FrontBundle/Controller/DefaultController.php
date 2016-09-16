<?php

namespace Pidev\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevFrontBundle::layout.html.twig', array());
    }
}
