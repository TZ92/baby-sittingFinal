<?php

namespace Pidev\MapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $Latitudes= '33.8859195';
        $Longitudes='9.5356966';
        return $this->render('PidevMapBundle:Map:index.html.twig', array('Latitudes' => $Latitudes , 'Longitudes' => $Longitudes));
    }
    
        public function MapNadineAction()
    {
       
        return $this->render('PidevMapBundle:Map:MapNadine.html.twig');
    }
}
