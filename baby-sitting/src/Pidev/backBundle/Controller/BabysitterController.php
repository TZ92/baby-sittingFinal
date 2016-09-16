<?php

namespace Pidev\backBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\backBundle\Entity\Babysitter;
use Pidev\backBundle\Form\BabysitterType;
class BabysitterController extends Controller
{
    public function ajoutAction()
    {
        $babysitter = new Babysitter();
        $form = $this->container->get('form.factory')->create(new BabysitterType(), $babysitter);

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($babysitter);
                $em->flush();
                return $this->redirect($this->generateUrl("listeBaby"));
            }
        }


        return $this->render('PidevbackBundle:Babysitter:ajout.html.twig', array(
                    'Form' => $form->createView()
        ));
    }

    public function updateAction()
    {
    }

    public function deleteAction()
    {
    }

    public function listeAction()
    {
        
        $em = $this->container->get('doctrine')->getEntityManager();

       

        $baby = $em->getRepository('PidevbackBundle:Babysitter')->findAll();

        return $this->render('PidevbackBundle:Babysitter:liste.html.twig', array('baby' => $baby));
    }

    public function rechercheAction()
    {
    }

}
