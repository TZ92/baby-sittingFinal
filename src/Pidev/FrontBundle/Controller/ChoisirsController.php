<?php

namespace Pidev\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class ChoisirsController extends Controller{
    
    public function listAction($idOffre)
    {
          $offrir=new Offrir();
        $offrir->setIdService($idService);
        $offrir->setIdOffre('1');
        
        $em=$this->container->get('doctrine')->getEntityManager();
                $em->persist($offrir);
                //executer l'insertion
                $em->flush();
         return $this->render('ok');
        
        
        
        
    }
    
    
    
    //put your code here
}