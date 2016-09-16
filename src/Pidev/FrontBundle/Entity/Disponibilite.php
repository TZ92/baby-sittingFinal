<?php

namespace Pidev\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibilite
 *
 * @ORM\Table(name="disponibilite")
 * @ORM\Entity
 */
class Disponibilite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="jour", type="string", length=20, nullable=false)
     */
    private $jour;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire", type="string", length=20, nullable=false)
     */
    private $horaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_babysitter", type="integer", nullable=true)
     */
    private $idBabysitter;

    function getId() {
        return $this->id;
    }

    function getJour() {
        return $this->jour;
    }

    function getHoraire() {
        return $this->horaire;
    }

    function getIdBabysitter() {
        return $this->idBabysitter;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setJour($jour) {
        $this->jour = $jour;
    }

    function setHoraire($horaire) {
        $this->horaire = $horaire;
    }

    function setIdBabysitter($idBabysitter) {
        $this->idBabysitter = $idBabysitter;
    }


}
