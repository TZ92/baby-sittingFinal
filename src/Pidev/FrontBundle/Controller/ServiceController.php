<?php

namespace Pidev\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\backBundle\Entity\Service;
use Pidev\backBundle\Form\ServiceType;

class ServiceController extends Controller
{
     public function listServicesAction()
    {
        //créer une instance de l'ORM
        $em=$this->container->get('doctrine')->getEntityManager();
        
        //Recherche
        $Request=$this->getRequest();
        if($Request->getMethod()=='POST')
        {
            $typeService=$Request->get('typeService');
            $description=$Request->get('description');
            $idCategorie=$Request->get('idCategorie');
            //$modeles=$em->getRepository('EspritParcBundle:Modele')->findByLibelle($libelle);
            $services=$em->getRepository('PidevFrontBundle:Service')->findByTypeService($typeService);
            return $this->render('PidevFrontBundle:Service:listServices.html.twig', array('Services'=>$services));
        }
        //Fin Recherche
        
        //récupérer la liste de tous les produits
        $services=$em->getRepository('PidevFrontBundle:Service')->findAll();
        //envoyer la liste de tous les produits a la vue
        return $this->render('PidevFrontBundle:Service:listServices.html.twig', array('Services'=>$services));
    }
    
    public function addServiceAction()
    {
        //créer une instance de notre entité vide --> inputs du formulaire sont vides
        $service=new Service();
        //créer une instance du formulaire avec l'entité en paramètre
        $form=$this->container->get("form.factory")->create(new ServiceType(),$service);
        
        //travailler le bouton Envoyer
        //récupérer les infos de l'envoi de l'URL
        $Request=$this->getRequest();
        if($Request->getMethod()=='POST')
        {
            //récupérer les champs à partir du formulaire
            $form->bind($Request);
            //vérifier si les données sont valides
            if($form->isValid())
            {
                $em=$this->container->get('doctrine')->getEntityManager();
                $em->persist($service);
                //executer l'insertion
                $em->flush();
                //en cliquant sur le bouton envoyer on affiche la liste des modèles à travers le nom de la route
                return $this->redirect($this->generateUrl("pidevback_list"));
            }
        }
        
        //Modele: le nom de la vue : Envoyer le formulaire à la vue sous le nom 'Form'
        return $this->render('PidevbackBundle:Service:addService.html.twig', array(
            'Form'=>$form->createView()
        ));
    }
    
    public function deleteServiceAction($id)
    {
        //créer une instance de l'ORM
        $em=$this->container->get('doctrine')->getEntityManager();
        $service=$em->getRepository('PidevbackBundle:Service')->find($id);
        
        //supprimer l'entité récupérée
        $em->remove($service);
        $em->flush();
        
        return $this->redirect($this->generateUrl("pidevback_list"));
        
    }
    
    public function updateServiceAction($id)
    {
        //créer une instance de l'ORM de notre entité selon l'id
        $em=$this->container->get('doctrine')->getEntityManager();
        $service=$em->getRepository('PidevbackBundle:Service')->find($id);
        
        //créer une instance du formulaire avec l'entité en paramètre
        $form=$this->container->get("form.factory")->create(new ServiceType(),$service);
        
        //travailler le bouton Mettre a jour
        //récupérer les infos de l'envoi de l'URL
        $Request=$this->getRequest();
        if($Request->getMethod()=='POST')
        {
            
            //récupérer les champs à partir du formulaire
            $form->bind($Request);
            //vérifier si les données sont valides
            if($form->isValid())
            {
                $em->persist($service);
                //executer l'insertion
                $em->flush();
                //en cliquant sur le bouton mettre a jour on affiche la liste des pdts à travers la route
                return $this->redirect($this->generateUrl("pidevback_list"));
            }
        }
        return $this->render('PidevbackBundle:Service:updateService.html.twig', array(
            'Form'=>$form->createView()
        ));
    }
}