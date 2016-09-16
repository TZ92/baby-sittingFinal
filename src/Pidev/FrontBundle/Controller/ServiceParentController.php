<?php

namespace Pidev\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\FrontBundle\Entity\Service;
use Pidev\FrontBundle\Entity\Choisirs;




class ServiceParentController extends Controller
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
        $services=$em->getRepository('PidevbFrontBundle:Service')->findAll();
        //envoyer la liste de tous les produits a la vue
        return $this->render('PidevFrontBundle:Service:listServices.html.twig', array('Services'=>$services));
    }
    
    public function choisirServiceAction($id)
    {
       
        $choisir=new Choisirs();
       
        $choisir->setIdService($id);
        $choisir->setIdOffre('1');
        
        $em=$this->container->get('doctrine')->getEntityManager();
                $em->persist($choisir);
                //executer l'insertion
                $em->flush();
         //return $this->render('ajout efféctue avec succes');
         return $this->redirect($this->generateUrl("pidevFront_list"));
    }
    }