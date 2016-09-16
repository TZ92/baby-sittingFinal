<?php

namespace Pidev\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur")
 * @ORM\Entity
 */
class Administrateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_admin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prnom;
    /**
     * @var integer
     *
     * 
     * @ORM\Column(name="numtel", type="integer", nullable=true)
     */
    private $numtel;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;
    /**
     * @var integer
     *
     * @ORM\Column(name="cin", type="integer", nullable=true)
     *
     */
    private $cin;
    function getIdAdmin() {
        return $this->idAdmin;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrnom() {
        return $this->prnom;
    }

    function getNumtel() {
        return $this->numtel;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getCin() {
        return $this->cin;
    }

    function setIdAdmin($idAdmin) {
        $this->idAdmin = $idAdmin;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrnom($prnom) {
        $this->prnom = $prnom;
    }

    function setNumtel($numtel) {
        $this->numtel = $numtel;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setCin($cin) {
        $this->cin = $cin;
    }


}
