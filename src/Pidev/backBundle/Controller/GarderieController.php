<?php

namespace Pidev\backBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\backBundle\Form\GarderieType;
use Pidev\backBundle\Entity\Garderie;

class GarderieController extends Controller
{

     public function ajoutAction()
    {
        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $garderie = new Garderie();
            
            $nomGarderie= $Request->get('nom');
            $adresseGarderie = $Request->get('adresse');
            $villeGarderie = $Request->get('ville');
            $numTel = $Request->get('numero');
            $contactGarderie = $Request->get('mail');
            $capaciteGarderie= $Request->get('capacite');
            $descriptionGarderie = $Request->get('description');
            
            
            $garderie->setNomGarderie($nomGarderie);
            $garderie->setAdresseGarderie($adresseGarderie);
            $garderie->setVilleGarderie($villeGarderie);
            $garderie->setNumTel($numTel);
            $garderie->setContactGarderie($contactGarderie);
            $garderie->setCapaciteGarderie($capaciteGarderie);
            $garderie->setDescriptionGarderie($descriptionGarderie);
            $garderie->setDateAjoutGarderie(new \Datetime());
            
            $em = $this->container->get('doctrine')->getEntityManager();
            $em->persist($garderie);
            $em->flush();
            return $this->redirect($this->generateUrl("listGarderie"));
        }
        return $this->render('PidevbackBundle:Garderie:ajoutGarderie.html.twig');
    }
    
    public function listAction() {

        $em = $this->container->get('doctrine')->getEntityManager();
        $Request = $this->getRequest();
        
        if ($Request->getMethod() == 'POST') {
            $idgarderie = $Request->get('idgarderie');
           

            $garderie = $em->getRepository('PidevbackBundle:Garderie')->findByidGarderie($idgarderie);
            return $this->render('PidevbackBundle:Garderie:list.html.twig', array('Garderie' => $garderie));
        
        
         if ($Request->getMethod() == 'POST') {
            $villegarderie = $Request->get('villeGarderie');
           

            $garderie = $em->getRepository('PidevbackBundle:Garderie')->findByvilleGarderie($villegarderie);
            return $this->render('PidevbackBundle:Garderie:list.html.twig', array('Garderie' => $garderie));
        }
        }
        
        $garderie = $em->getRepository('PidevbackBundle:Garderie')->findAll();
        return $this->render('PidevbackBundle:Garderie:list.html.twig', array('Garderie' => $garderie));
    }
   
    public function deleteAction($idgarderie) {
        
        $em = $this->container->get('doctrine')->getEntityManager();
        $garderie = $em->getRepository('PidevbackBundle:Garderie')->find($idgarderie);
        $em->remove($garderie);
        $em->flush();
        return $this->redirect($this->generateUrl("listGarderie"));
    }
    
      public function updateAction($idgarderie) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $garderie = $em->getRepository('PidevbackBundle:Garderie')->find($idgarderie);

        $form = $this->container->get('form.factory')->create(new GarderieType(), $garderie);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($garderie);
                $em->flush();
                return $this->redirect($this->generateUrl("listGarderie"));
            }
        }

        return $this->render('PidevbackBundle:Garderie:update.html.twig', array('Form' => $form->createView()));
        //return new Response(var_dump($modeles)); 
    }
}

