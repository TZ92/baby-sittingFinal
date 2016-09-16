<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        if ($this->get('security.context')->isGranted('ROLE_ADMIN')) 
        {
            return $this->render('PidevbackBundle::layout.html.twig');
        }
         if ($this->get('security.context')->isGranted('ROLE_BABY')) 
        {
            return $this->render('PidevFrontBundle::layout.html.twig');
        }
        return $this->render('PidevFrontBundle::layout2.html.twig',array(
            'last_username' => "",
            'error'         => "",
            'csrf_token' => "",
        ));
    }
}
