<?php

namespace Pidev\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity
 */
class Service
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idService", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idservice;

    /**
     * @var string
     *
     * @ORM\Column(name="typeService", type="string", length=1000, nullable=true)
     */
    private $typeservice;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000, nullable=false)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumn(name="idCategorie", referencedColumnName="idCategorie", onDelete="CASCADE")
     * 
     */
    private $idcategorie;

    function getIdservice() {
        return $this->idservice;
    }

    function getTypeservice() {
        return $this->typeservice;
    }

    function getDescription() {
        return $this->description;
    }

    function getIdcategorie() {
        return $this->idcategorie;
    }

    function setIdservice($idservice) {
        $this->idservice = $idservice;
    }

    function setTypeservice($typeservice) {
        $this->typeservice = $typeservice;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setIdcategorie($idcategorie) {
        $this->idcategorie = $idcategorie;
    }


}
