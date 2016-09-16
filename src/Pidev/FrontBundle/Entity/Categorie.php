<?php

namespace Pidev\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCategorie", type="string", length=20, nullable=false)
     */
    private $nomcategorie;

    function getIdcategorie() {
        return $this->idcategorie;
    }

    function getNomcategorie() {
        return $this->nomcategorie;
    }

    function setIdcategorie($idcategorie) {
        $this->idcategorie = $idcategorie;
    }

    function setNomcategorie($nomcategorie) {
        $this->nomcategorie = $nomcategorie;
    }


}
