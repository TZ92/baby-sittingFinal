<?php

namespace Pidev\backBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\backBundle\Entity\Categorie;
use Pidev\backBundle\Form\CategorieType;

class CategorieController extends Controller
{
     public function listCategoriesAction()
    {
        //créer une instance de l'ORM
        $em=$this->container->get('doctrine')->getEntityManager();
        
        //Recherche
        $Request=$this->getRequest();
        if($Request->getMethod()=='POST')
        {
            $nomCategorie=$Request->get('nomCategorie');
            //$modeles=$em->getRepository('EspritParcBundle:Modele')->findByLibelle($libelle);
            $categories=$em->getRepository('PidevbackBundle:Categorie')->findByNomCategorie($nomCategorie);
            return $this->render('PidevbackBundle:Categorie:listCategories.html.twig', array('Categories'=>$categories));
        }
        //Fin Recherche
        
        //récupérer la liste de tous les produits
        $categories=$em->getRepository('PidevbackBundle:Categorie')->findAll();
        //envoyer la liste de tous les produits a la vue
        return $this->render('PidevbackBundle:Categorie:listCategories.html.twig', array('Categories'=>$categories));
    }
    
     public function addCategorieAction()
    {
        //créer une instance de notre entité vide --> inputs du formulaire sont vides
        $categorie=new Categorie();
        //créer une instance du formulaire avec l'entité en paramètre
        $form=$this->container->get("form.factory")->create(new CategorieType(),$categorie);
        
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
                $em->persist($categorie);
                //executer l'insertion
                $em->flush();
                //en cliquant sur le bouton envoyer on affiche la liste des modèles à travers le nom de la route
                return $this->redirect($this->generateUrl("pidevback_listCategories"));
            }
        }
        
        //Modele: le nom de la vue : Envoyer le formulaire à la vue sous le nom 'Form'
        return $this->render('PidevbackBundle:Categorie:addCategorie.html.twig', array(
            'Form'=>$form->createView()
        ));
    }
    
    public function deleteCategorieAction($id)
    {
        //créer une instance de l'ORM
        $em=$this->container->get('doctrine')->getEntityManager();
        $categorie=$em->getRepository('PidevbackBundle:Categorie')->find($id);
        
        //supprimer l'entité récupérée
        $em->remove($categorie);
        $em->flush();
        
        return $this->redirect($this->generateUrl("pidevback_listCategories"));
        
    }
    
    public function updateCategorieAction($id)
    {
        //créer une instance de l'ORM de notre entité selon l'id
        $em=$this->container->get('doctrine')->getEntityManager();
        $categorie=$em->getRepository('PidevbackBundle:Categorie')->find($id);
        
        //créer une instance du formulaire avec l'entité en paramètre
        $form=$this->container->get("form.factory")->create(new CategorieType(),$categorie);
        
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
                $em->persist($categorie);
                //executer l'insertion
                $em->flush();
                //en cliquant sur le bouton mettre a jour on affiche la liste des pdts à travers la route
                return $this->redirect($this->generateUrl("pidevback_listCategories"));
            }
        }
        return $this->render('PidevbackBundle:Categorie:updateCategorie.html.twig', array(
            'Form'=>$form->createView()
        ));
    }
}
