<?php
namespace Pidev\FrontBundle\Entity;
use Doctrine\ORM\EntityRepository;

class BabysitterRepository extends EntityRepository{

public function findByFilterDQL($sexe,$age,$ville,$note,$prix){
$query=$this->getEntityManager()->createQuery("SELECT b FROM
PidevFrontBundle:Babysitter b WHERE b.sexeBabysitter LIKE 
:sexe  AND b.ageBabysitter = :age AND b.ville  LIKE :ville AND b.note= :note AND b.tarifHeur < :prix" )
->setParameter('sexe','%'.$sexe.'%')
->setParameter('age',$age) 
->setParameter('ville','%'.$ville.'%')
->setParameter('note',$note) 
->setParameter('prix',$prix)
        
        ;

return $query->getResult();
}
}