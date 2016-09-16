<?php

namespace Pidev\GrapheBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Zend\Json\Expr;


class GrapheController extends Controller{
public function chartPieAction(){
$ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('Nombre d inscri sur Grand Tunis');
$ob->plotOptions->pie(array(
    'allowPointSelect'  => true,
    'cursor'    => 'pointer',
    'dataLabels'    => array('enabled' => false),
    'showInLegend'  => true
));


// Parents inscri Sur Tunis

$em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                "SELECT count(p.idParent) 
                 FROM PidevbackBundle:Parents p 
                 WHERE (p.villeParent) = 'Tunis' "
                );
        $Parents = $query->getSingleScalarResult();
        $p=(int)$Parents;
        
// Parents inscri Sur Mannouba
        
      $em1 = $this->getDoctrine()->getManager();
        $query1 = $em1->createQuery(
                "SELECT count(d.idParent) 
                 FROM PidevbackBundle:Parents d 
                 WHERE (d.villeParent) = 'Mannouba' "
                );
        $Parents = $query1->getSingleScalarResult();
        $d=(int)$Parents;
        
// Parents inscri Sur Ariana        

      $em2 = $this->getDoctrine()->getManager();
        $query2 = $em2->createQuery(
                "SELECT count(e.idParent) 
                 FROM PidevbackBundle:Parents e 
                 WHERE (e.villeParent) = 'Ariana' "
                );
        $Parents = $query2->getSingleScalarResult();
        $e=(int)$Parents;
        
// Parents inscri Sur Ben Arous
        
        $em3 = $this->getDoctrine()->getManager();
        $query3 = $em3->createQuery(
                "SELECT count(f.idParent) 
                 FROM PidevbackBundle:Parents f 
                 WHERE (f.villeParent) = 'Ben Arous' "
                );
        $Parents = $query3->getSingleScalarResult();
        $f=(int)$Parents;
        

$data = array(
    array('Tunis', $p), 
    array('Mannouba', $d), 
    array('Ariana', $e),
    array('Ben Arous', $f),
    
);
$ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));
return $this->render('PidevGrapheBundle:Graphe:pie.html.twig', array(
        'chart' => $ob
    ));
}


  public function chartLineAction(){
    // Chart
    $series = array(
        array("name" => "Baby Sitter",    "data" => array(1,2,4,5,6,20,8))
    );
    $ob = new Highchart();
    $ob->chart->renderTo('linechart');  //  #id du div où afficher le graphe
    $ob->title->text('Evolution du nombre d inscri'); 
    $ob->xAxis->title(array('text'  => "mois"));
    $ob->yAxis->title(array('text'  => "Nombre d'inscri "));
    $ob->series($series);

    return $this->render('PidevGrapheBundle:Graphe:LineChart.html.twig', array(
        'chart' => $ob
    ));
} 



public function chartHistogrammeAction()
{
    
    
// Parents inscri en janvier
    
    $em5 = $this->getDoctrine()->getManager();
        $query5 = $em5->createQuery(
                "SELECT count(c.idParent) 
                 FROM PidevbackBundle:Parents c 
                 WHERE (c.dateInscri) >= '2015-01-01' AND  (c.dateInscri) <= '2015-01-30'"
                );
        $Parents = $query5->getSingleScalarResult();
        $c=(int)$Parents;
        
// Parents inscri en fevrier
    
        $em6 = $this->getDoctrine()->getManager();
        $query6 = $em6->createQuery(
                "SELECT count(a.idParent) 
                 FROM PidevbackBundle:Parents a 
                 WHERE (a.dateInscri) >= '2015-02-01' AND  (a.dateInscri) <= '2015-02-30'"
                );
        $Parents = $query6->getSingleScalarResult();
        $a=(int)$Parents;
        
// Parents inscri en mars        
        $em7 = $this->getDoctrine()->getManager();
        $query7 = $em7->createQuery(
                "SELECT count(b.idParent) 
                 FROM PidevbackBundle:Parents b 
                 WHERE (b.dateInscri) >= '2015-03-01' AND  (b.dateInscri) <= '2015-03-30'"
                );
        $Parents = $query7->getSingleScalarResult();
        $b=(int)$Parents;
        
// Parents inscri en Avril
        $em8 = $this->getDoctrine()->getManager();
        $query8 = $em8->createQuery(
                "SELECT count(g.idParent) 
                 FROM PidevbackBundle:Parents g 
                 WHERE (g.dateInscri) >= '2015-04-01' AND  (g.dateInscri) <= '2015-04-30'"
                );
        $Parents = $query8->getSingleScalarResult();
        $g=(int)$Parents;
        
// Parents inscri en decembre      
        $em9 = $this->getDoctrine()->getManager();
        $query9 = $em9->createQuery(
                "SELECT count(h.idParent) 
                 FROM PidevbackBundle:Parents h 
                 WHERE (h.dateInscri) >= '2014-12-01' AND  (h.dateInscri) <= '2014-12-30'"
                );
        $Parents = $query9->getSingleScalarResult();
        $h=(int)$Parents;
        
// Parents inscri en novembre        
        $em10 = $this->getDoctrine()->getManager();
        $query10 = $em10->createQuery(
                "SELECT count(i.idParent) 
                 FROM PidevbackBundle:Parents i 
                 WHERE (i.dateInscri) >= '2014-11-01' AND  (i.dateInscri) <= '2014-11-30'"
                );
        $Parents = $query10->getSingleScalarResult();
        $i=(int)$Parents;
        
        
        
// mm chose pour les baby sitters       
        
        
        $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(j.idBabysitter) 
                 FROM PidevbackBundle:Babysitter j 
                 WHERE (j.dateInscri) >= '2014-11-01' AND  (j.dateInscri) <= '2014-11-30'"
                );
        $Babysitter = $query11->getSingleScalarResult();
        $j=(int)$Babysitter ;
        
        
        
         $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(k.idBabysitter) 
                 FROM PidevbackBundle:Babysitter k 
                 WHERE (k.dateInscri) >= '2014-12-01' AND  (k.dateInscri) <= '2014-12-30'"
                );
        $Babysitter = $query11->getSingleScalarResult();
        $k=(int)$Babysitter ;
        
        
        
         $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(l.idBabysitter) 
                 FROM PidevbackBundle:Babysitter l 
                 WHERE (l.dateInscri) >= '2015-01-01' AND  (l.dateInscri) <= '2015-01-30'"
                );
        $Babysitter = $query11->getSingleScalarResult();
        $l=(int)$Babysitter ;
        
        
        
         $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(m.idBabysitter) 
                 FROM PidevbackBundle:Babysitter m 
                 WHERE (m.dateInscri) >= '2015-02-01' AND  (m.dateInscri) <= '2015-02-30'"
                );
        $Babysitter = $query11->getSingleScalarResult();
        $m=(int)$Babysitter ;
        
        
        
        
         $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(n.idBabysitter) 
                 FROM PidevbackBundle:Babysitter n 
                 WHERE (n.dateInscri) >= '2015-03-01' AND  (n.dateInscri) <= '2015-03-30'"
                );
        $Babysitter = $query11->getSingleScalarResult();
        $n=(int)$Babysitter ;
        
        
        
         $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(o.idBabysitter) 
                 FROM PidevbackBundle:Babysitter o 
                 WHERE (o.dateInscri) >= '2015-04-01' AND  (o.dateInscri) <= '2015-04-30'"
                );
        $Babysitter = $query11->getSingleScalarResult();
        $o=(int)$Babysitter ;
        
        
        
        
$series = array(
    array(
        'name'  => 'Nombre De Parents ',
        'type'  => 'column',
        'color' => '#4572A7',
        'yAxis' => 1,
        'data'  => array($i,$h,$c, $a, $b, $g),
    ),
    array(
        'name'  => 'Nombre De Baby Sitters ',
        'type'  => 'spline',
        'color' => '#AA4643',
        'data'  => array($j,$k,$l,$m,$n,$o),
    ),
);
$yData = array(
    array(
        'labels' => array(
            'formatter' => new Expr('function () { return this.value + "" }'),
            'style'     => array('color' => '#AA4643')
        ),
        'title' => array(
            'text'  => 'Nombre de Baby Sitter',
            'style' => array('color' => '#AA4643')
        ),
        'opposite' => true,
    ),
    array(
        'labels' => array(
            'formatter' => new Expr('function () { return this.value + "" }'),
            'style'     => array('color' => '#4572A7')
        ),
        'gridLineWidth' => 0,
        'title' => array(
            'text'  => 'Nombre De Parents',
            'style' => array('color' => '#4572A7')
        ),
    ),
); 

$categories = array('Nov', 'Dec','Jan', 'Fev', 'Mar', 'Avr');

$ob = new Highchart();
$ob->chart->renderTo('container'); // The #id of the div where to render the chart
$ob->chart->type('column');
$ob->title->text('Evolution du nombre d\'utilisateurs');
$ob->xAxis->categories($categories);
$ob->yAxis($yData);
$ob->legend->enabled(false);
$formatter = new Expr('function () {
                 var unit = {
                     "Nombre D\'inscri": "",
                     "Nombre de Baby Sitter": ""
                 }[this.series.name];
                 return this.x + ": <b>" + this.y + "</b> " + unit;
             }');
$ob->tooltip->formatter($formatter);
$ob->series($series);
return $this->render('PidevGrapheBundle:Graphe:histogramme.html.twig', array(
        'chart' => $ob
    ));   
}



} 
