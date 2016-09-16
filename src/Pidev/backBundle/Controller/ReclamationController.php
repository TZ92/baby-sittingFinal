<?php

namespace Pidev\backBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\backBundle\Entity\Reclamation;
class ReclamationController extends Controller
{
    public function listAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();

        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') {

            $type = $Request->get('type');


            $reclamation = $em->getRepository('PidevbackBundle:Reclamation')->findByType($type);
          return $this->render('PidevbackBundle:Reclamation:list.html.twig', array('Reclamation' => $reclamation));
        }

        $reclamation = $em->getRepository('PidevbackBundle:Reclamation')->findAll();

        return $this->render('PidevbackBundle:Reclamation:list.html.twig', array('Reclamation' => $reclamation));
    }
     public function deleteAction($idreclamation) {
     
        $em = $this->container->get('doctrine')->getEntityManager();
        $reclamation = $em->getRepository('PidevbackBundle:Reclamation')->find($idreclamation);
        $em->remove($reclamation);
        $em->flush();
        
        return $this->redirect($this->generateUrl("listeReclamation"));
        
    }
    
     public function noteAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();


        $reclamation = $em->getRepository('PidevbackBundle:Reclamation')->findAll();

        return $this->render('PidevbackBundle::layout.html.twig', array('Reclamation' => $reclamation));
    }

    
        }


     
