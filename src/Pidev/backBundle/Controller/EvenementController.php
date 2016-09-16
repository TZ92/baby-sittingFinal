<?php

namespace Pidev\backBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\backBundle\Entity\Evenement;
use Pidev\backBundle\Form\EvenementType;

class EvenementController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PidevbackBundle:Default:index.html.twig', array('name' => $name));
    }
     public function ajoutAction()
    {
        $evenement = new Evenement();
        $form = $this->container->get('form.factory')->create(new EvenementType(), $evenement);

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            $evenement->upload();
            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($evenement);
                $em->flush();
                return $this->redirect($this->generateUrl("listEvenement"));
            }
        }


        return $this->render('PidevbackBundle:Evenement:ajout.html.twig', array(
                    'Form' => $form->createView()
        ));
    }
    
     public function listAction() {

        $em = $this->container->get('doctrine')->getEntityManager();

        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') {
            $idevenement = $Request->get('idevenement');
           

            $evenement = $em->getRepository('PidevbackBundle:Evenement')->findByidevenement($idevenement);
            return $this->render('PidevbackBundle:Evenement:list.html.twig', array('Evenement' => $evenement));
        }

        $evenement = $em->getRepository('PidevbackBundle:Evenement')->findAll();

        return $this->render('PidevbackBundle:Evenement:list.html.twig', array('Evenement' => $evenement));
    }
    public function updateAction($idevenement) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $evenement = $em->getRepository('PidevbackBundle:Evenement')->find($idevenement);

        $form = $this->container->get('form.factory')->create(new EvenementType(), $evenement);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($evenement);
                $em->flush();
                return $this->redirect($this->generateUrl("listEvenement"));
            }
        }

        return $this->render('PidevbackBundle:Evenement:update.html.twig', array('Form' => $form->createView()));
        //return new Response(var_dump($modeles)); 
    }
     public function deleteAction($idevenement) {
        
        $em = $this->container->get('doctrine')->getEntityManager();
        $evenement = $em->getRepository('PidevbackBundle:Evenement')->find($idevenement);
        $em->remove($evenement);
        $em->flush();
        return $this->redirect($this->generateUrl("listEvenement"));
    }
    
     public function testAction($name)
    {
        return $this->render('PidevbackBundle:Evenement:test.html.twig');
    }
    
}


