<?php

namespace Pidev\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parent
 *
 * @ORM\Table(name="parent")
 * @ORM\Entity
 */
class Parents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParent;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin_parent", type="integer", nullable=false)
     */
    private $cinParent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_parent", type="string", length=30, nullable=false)
     */
    private $nomParent;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_parent", type="string", length=30, nullable=false)
     */
    private $prenomParent;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_parent", type="string", length=20, nullable=false)
     */
    private $villeParent;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_parent", type="string", length=100, nullable=false)
     */
    private $adresseParent;

    /**
     * @var integer
     *
     * @ORM\Column(name="numtel_parent", type="integer", nullable=false)
     */
    private $numtelParent;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_parent", type="string", length=30, nullable=false)
     */
    private $mailParent;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_enfant", type="integer", nullable=false)
     */
    private $nbEnfant;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=50, nullable=false)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="info_enfant", type="string", length=255, nullable=false)
     */
    private $infoEnfant;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscri", type="date", nullable=true)
     */
    private $dateInscri;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_MAJ", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable", type="boolean", nullable=false)
     */
    private $enable;
    function getIdParent() {
        return $this->idParent;
    }

    function getCinParent() {
        return $this->cinParent;
    }

    function getNomParent() {
        return $this->nomParent;
    }

    function getPrenomParent() {
        return $this->prenomParent;
    }

    function getVilleParent() {
        return $this->villeParent;
    }

    function getAdresseParent() {
        return $this->adresseParent;
    }

    function getNumtelParent() {
        return $this->numtelParent;
    }

    function getMailParent() {
        return $this->mailParent;
    }

    function getNbEnfant() {
        return $this->nbEnfant;
    }

    function getMdp() {
        return $this->mdp;
    }

    function getInfoEnfant() {
        return $this->infoEnfant;
    }

    function getDescription() {
        return $this->description;
    }

    function getDateInscri() {
        return $this->dateInscri;
    }

    function getDateMaj() {
        return $this->dateMaj;
    }

    function getEnable() {
        return $this->enable;
    }

    function setIdParent($idParent) {
        $this->idParent = $idParent;
    }

    function setCinParent($cinParent) {
        $this->cinParent = $cinParent;
    }

    function setNomParent($nomParent) {
        $this->nomParent = $nomParent;
    }

    function setPrenomParent($prenomParent) {
        $this->prenomParent = $prenomParent;
    }

    function setVilleParent($villeParent) {
        $this->villeParent = $villeParent;
    }

    function setAdresseParent($adresseParent) {
        $this->adresseParent = $adresseParent;
    }

    function setNumtelParent($numtelParent) {
        $this->numtelParent = $numtelParent;
    }

    function setMailParent($mailParent) {
        $this->mailParent = $mailParent;
    }

    function setNbEnfant($nbEnfant) {
        $this->nbEnfant = $nbEnfant;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    function setInfoEnfant($infoEnfant) {
        $this->infoEnfant = $infoEnfant;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDateInscri(\DateTime $dateInscri) {
        $this->dateInscri = $dateInscri;
    }

    function setDateMaj(\DateTime $dateMaj) {
        $this->dateMaj = $dateMaj;
    }

    function setEnable($enable) {
        $this->enable = $enable;
    }


    

}
