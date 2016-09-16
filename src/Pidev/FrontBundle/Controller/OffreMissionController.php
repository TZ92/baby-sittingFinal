<?php

namespace Pidev\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\FrontBundle\Entity\OffreMission;
use Pidev\FrontBundle\Form\OffreMissionType;
use Symfony\Component\HttpFoundation\Response ;
use Ps\PdfBundle\Annotation\Pdf;

class OffreMissionController extends Controller{
   
    public function listAction()
    { 
 $em = $this->container->get('doctrine')->getEntityManager();
//recherche
        $Request=$this->getRequest();
        if($Request->getMethod()=='POST')
        {
            $lieuMission=$Request->get('lieuMission');
            $dateDebut=$Request->get('dateDebut');
            $dateFin=$Request->get('dateFin');
            $horaireGarde=$Request->get('horaireGarde');
            $nombreEnfant=$Request->get('nombreEnfant');
            $sexe=$Request->get('sexe');
            $idOffre=$Request->get('idOffre');
            
            //$modeles=$em->getRepository('EspritParcBundle:Modele')->findByLibelle($libelle);
            $offres=$em->getRepository('PidevFrontBundle:OffreMission')->findByLieuMission($lieuMission);
            return $this->render('PidevFrontBundle:OffreMission:list.html.twig', array('offres'=>$offres));
        }
       
        $offres = $em->getRepository('PidevFrontBundle:OffreMission')->findAll();
        return $this->render('PidevFrontBundle:OffreMission:list.html.twig',array('offres'=> $offres));
     
        //Fin Recherche
 
    }
    
    
     public function ajoutAction()
    {
          $offre = new OffreMission();#creer modele feragh
          $form = $this->container->get('form.factory')->create(new OffreMissionType(),$offre);#crer formiulaire b$modele feragh
          $Request=$this->getRequest();# on  a recuprere/ crer requete
       
        if ($Request->getMethod()=='POST')#chnia naw3eeyet el requete / 3malnateest / kenou mab3outh bel post
      { # ken bel post yod5el fil if 
            $form->bind($Request);#  / formulaire mte3ek 3abih belli be3thou fel request
            if($form->isValid())  # verifier les champs
            {
                $em=$this->container->get('doctrine')->getEntityManager();
                $em->persist($offre);# 5outh les info men 3and modele
                $em->flush();# t executi / t9ollou inseri
                return $this->redirect($this->generateUrl("pidev_backBundle_List")); # thezek lel page ta3 liste
            }
            
        }
    return $this->render('PidevFrontBundle:OffreMission:add.html.twig', array('Form'=>$form->createview()
        ));
    }

    
    
    
    
    public function updateAction($id)
    { 
      
        $em=$this->container->get('doctrine')->getEntityManager();
        $offre = $em->getRepository('PidevFrontBundle:OffreMission')->find($id); 
        $form = $this->container->get('form.factory')->create(new OffreMissionType(),$offre);
        $Request=$this->getRequest();
                
        if ($Request->getMethod()=='POST')
          { 
            $form->bind($Request);
            if($form->isValid())  
              {
                $em->persist($offre);
                $em->flush();
                return $this->redirect($this->generateUrl("pidev_backBundle_List")); 
            }
            
        }
        return $this->render('PidevFrontBundle:OffreMission:update.html.twig', array(
            
            'Form'=>$form->createview()
        ));
         
    }

     public function deleteAction($id)
    { 
      $em = $this->container->get('doctrine')->getEntityManager();//gestionnaire des entites 
      $offre = $em->getRepository('PidevFrontBundle:OffreMission')->find($id);//lawajli 3al element bel id w raja3houli fi modele
      $em->remove($offre);//fasa5
      $em->flush();// exceuti
      return $this->redirect($this->generateUrl("pidev_backBundle_List"));// hezna lel page li fiha list (route)
      
    }

    
    
   
    
    public function generatePdfAction() {
        $em = $this->getDoctrine()->getManager();
        $offres = $em->getRepository("PidevFrontBundle:OffreMission");
        //$tab = array('idBabysitter' => $id);
        $res = $offres->findAll();
        $html = $this->renderView('PidevFrontBundle:OffreMission:testPdf.html.twig', array(
            'some' => $res
        ));
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="file.pdf"'
                )
        );
    }


}