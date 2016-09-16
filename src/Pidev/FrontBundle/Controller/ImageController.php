<?php

namespace Pidev\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\FrontBundletBundle\Entity\Image;
use Pidev\FrontBundle\Form\ImageType;
//Use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ImageController extends Controller{


        
 public function uploadAction()

 {

 $im=new \Pidev\backBundle\Entity\Babysitter();

 //$form = $this-> createForm(new ImageType(), $im);

 //$request = $this->get('request') ;

 //$form->handleRequest($request) ;

 //if ($form->isValid()) 

 //{
$Request=$this->getRequest();
if($Request->getMethod()=='POST')
        {
    
$src=$Request->files->get('photo');
 $em = $this->getDoctrine()->getManager();
 $stream = fopen($src,'rb');

 $im->setImageBabysitter(stream_get_contents($stream));

 $em->persist($im);
 $id=$im->getId();

 $em->flush();
$id->$im->getId();
        
 //}

 return $this->render('PidevFrontBundle:OffreMission:upload.html.twig', array());

 }
 return $this->render('PidevFrontBundle:OffreMission:upload.html.twig', array()); }
    
    public function photoAction($id)

 {

 $em = $this->getDoctrine()->getManager();

 $image_obj = $em->getRepository('PidevFrontBundle:Image')->find($id);

 $photo=$image_obj->getIm();

 $response = new StreamedResponse(function() use ($photo) {

 echo stream_get_contents($photo);

 });

// le content type à fixer selon l’extension de l’image

 $response->headers->set('Content-Type', 'image/jpeg');

 return $response;

 }
    
    
    
}