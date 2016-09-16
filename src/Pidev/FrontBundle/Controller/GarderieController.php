<?php

namespace Pidev\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\backBundle\Form\GarderieType;
use Pidev\backBundle\Entity\Garderie;

class GarderieController extends Controller
{

     
    
    public function listAction() {

        $em = $this->container->get('doctrine')->getEntityManager();
        $Request = $this->getRequest();
        
      if ($Request->getMethod() == 'POST') {
            $villegarderie = $Request->get('villeGarderie');
           

            $garderie = $em->getRepository('PidevFrontBundle:Garderie')->findByvilleGarderie($villegarderie);
            return $this->render('PidevFrontBundle:Garderie:liste.html.twig', array('Garderie' => $garderie));
        }
        
        $garderie = $em->getRepository('PidevFrontBundle:Garderie')->findAll();
        return $this->render('PidevFrontBundle:Garderie:liste.html.twig', array('Garderie' => $garderie));
    }
   
    
    
      
}

