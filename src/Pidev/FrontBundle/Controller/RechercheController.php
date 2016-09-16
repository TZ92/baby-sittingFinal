<?php

namespace Pidev\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RechercheController extends Controller {
    public function rechercheAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();

        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') 
            {
            $sexe = $Request->get('sexe');
            $age = $Request->get('age');
            $ville = $Request->get('ville');
            $note = $Request->get('note');
            $prix = $Request->get('prix');
            $baby = $em->getRepository('PidevFrontBundle:Babysitter')->findByFilterDQL($sexe,$age,$ville,$note,$prix);
            return $this->render('PidevFrontBundle:Recherche:liste.html.twig', array('baby' => $baby));
        }

        $baby = $em->getRepository('PidevbackBundle:Babysitter')->findAll();

        return $this->render('PidevFrontBundle::layout.html.twig', array());
    }
      public function listeAction()
    {
        
        $em = $this->container->get('doctrine')->getEntityManager();

       

        $baby = $em->getRepository('PidevbackBundle:Babysitter')->findAll();

        return $this->render('PidevFrontBundle:Recherche:liste.html.twig', array('baby' => $baby));
    }

}
