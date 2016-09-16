<?php

namespace Pidev\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\FrontBundle\Entity\OffreMission;
use Pidev\FrontBundle\Form\OffreMissionType;
use Symfony\Component\HttpFoundation\Response ;


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
 public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(new ArticleType(), $article);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->get('session')->getFlashBag()->add('message', 'L\'article a bien été ajoutée !');

            return $this->redirect($this->generateUrl('article_index'));
        }

        return array('form' => $form->createView());
    }
    
    
    
    public function indexAction()
    {
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig 
        //si la vue comporte des données dynamiques
         $em = $this->container->get('doctrine')->getEntityManager();
        $offres = $em->getRepository('PidevbackBundle:OffreMission')->findAll();
        $html = $this->renderView('PidevbackBundle:OffreMission:list.html.twig', array('offres' => $offres));
         var_dump($html); die();
        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
 
        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');
 
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);
 
        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un
        // rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $html2pdf->Output('Facture.pdf');
         
     
        return new Response();
    }
    
    
    
   
}


