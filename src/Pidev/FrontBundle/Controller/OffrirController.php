<?php

namespace Pidev\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\FrontBundle\Entity\Offrir;

class OffrirController extends Controller
{
    public function choisirServiceAction($idService)
    {
        /*$query=$this->getEntityManager()
                ->createQuery("UPDATE PidevFrontBundle:Offrir m SET m.idService = :nvId and m.idBabysitter= :nvIdBabysitter");
        $query->setParameter('nvId ', $idService);
        $query->setParameter('nvIdBabysitter', 'userName');
        $query->execute();*/
        $offrir=new Offrir();
        $offrir->setIdService($idService);
        $offrir->setIdBabysitter('1');
        
        $em=$this->container->get('doctrine')->getEntityManager();
                $em->persist($offrir);
                //executer l'insertion
                $em->flush();
         //return $this->render('ajout efféctue avec succes');
         return $this->redirect($this->generateUrl("pidevFront_list"));
    }
}