<?php

namespace Pidev\backBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\backBundle\Entity\Babysitter;
use Pidev\backBundle\Form\BabysitterType;
use Symfony\Component\HttpFoundation\Response;

class BabysitterController extends Controller
{
    public function homeAction()
    {
      return $this->render('PidevbackBundle::layout.html.twig', array());  
    }

    public function ajoutAction()
    {
        $babysitter = new Babysitter();
        $form = $this->container->get('form.factory')->create(new BabysitterType(),$babysitter);
        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            $user=  $this->getUser();
            $name=$user->getUsername();
            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $babysitter->setUsername($name);
                $em->persist($babysitter);
                $em->flush();
                return $this->redirect($this->generateUrl("listeBaby"));
            }
        }
    return $this->render('PidevbackBundle:Babysitter:ajout.html.twig', array('Form' => $form->createView()));
    }

    public function updateAction($id)
    {
     $em = $this->container->get('doctrine')->getEntityManager();
     
        $lot = $em->getRepository('PidevbackBundle:Babysitter')->find($id);

        $form = $this->container->get('form.factory')->create(new BabysitterType(), $lot);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($lot);
                $em->flush();
                return $this->redirect($this->generateUrl("listeBaby"));
            }
        }
        return $this->render('PidevbackBundle:Babysitter:update.html.twig', array('Form' => $form->createView()));
    }

    public function deleteAction($id)
    {
        if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $baby = $em->getRepository('PidevbackBundle:Babysitter')->find($id);
        $em->remove($baby);
        $em->flush();
        return $this->redirect($this->generateUrl("listeBaby"));
    }
    }

    public function listeAction()
    {
        if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {
        $em = $this->container->get('doctrine')->getEntityManager();

       

        $baby = $em->getRepository('PidevbackBundle:Babysitter')->findAll();

        return $this->render('PidevbackBundle:Babysitter:liste.html.twig', array('baby' => $baby));
    }}

    public function rechercheAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();

        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') 
            {
            $cin = $Request->get('cin');

            $baby = $em->getRepository('PidevbackBundle:Babysitter')->findByCinBabysitter($cin);
            return $this->render('PidevbackBundle:Babysitter:recherche.html.twig', array('baby' => $baby));
        }

        $baby = $em->getRepository('PidevbackBundle:Babysitter')->findAll();

        return $this->render('PidevbackBundle:Babysitter:recherche.html.twig', array('baby' => $baby));
    }
    public function showAction($id)
    {
         $em = $this->getDoctrine()->getManager();
        $baby = $em->getRepository('PidevbackBundle:Babysitter')->find($id);
       return $this->render('PidevbackBundle:Babysitter:show.html.twig', array('baby' => $baby));
        
    }
         public function profileAction()
    {    
        $user = $this->getUser();
        $name=$user->getUsername();
        $em = $this->container->get('doctrine')->getEntityManager();
        $baby= $em->getRepository('PidevbackBundle:Babysitter')->findOneByUsername($name);
        $em->persist($baby);
        if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {
            return $this->render('FOSUserBundle:Profile:show_content_admin.html.twig', array(
            'user' => $user,
            'baby'=>$baby   
        ));
        }
    }
    
    public function generateBabyAction() {
        $em = $this->getDoctrine()->getManager();
        $babysitter = $em->getRepository("PidevbackBundle:Babysitter");
        //$tab = array('idBabysitter' => $id);
        $res = $babysitter->findAll();
        $html = $this->renderView('PidevbackBundle:Babysitter:ListeBaby.html.twig', array(
            'some' => $res
        ));
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="ListeBabySitter.pdf"'
                )
        );
    }
}
