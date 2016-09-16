<?php

namespace Pidev\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Babysitter
 
 * @ORM\Table(name="babysitter")
 * @ORM\Entity(repositoryClass="Pidev\FrontBundle\Entity\BabysitterRepository")
 */
class Babysitter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_babysitter", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBabysitter;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin_babysitter", type="integer", nullable=false)
     */
    private $cinBabysitter;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_babysitter", type="string", length=30, nullable=true)
     */
    private $nomBabysitter;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_babysitter", type="string", length=30, nullable=true)
     */
    private $prenomBabysitter;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe_babysitter", type="string", length=10, nullable=false)
     */
    private $sexeBabysitter;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=20, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_babysitter", type="string", length=100, nullable=true)
     */
    private $adresseBabysitter;

    /**
     * @var integer
     *
     * @ORM\Column(name="age_babysitter", type="integer", nullable=true)
     */
    private $ageBabysitter;

    /**
     * @var integer
     *
     * @ORM\Column(name="numtel_babysitter", type="integer", nullable=true)
     */
    private $numtelBabysitter;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_babysitter", type="string", length=30, nullable=true)
     */
    private $mailBabysitter;

    /**
     * @var string
     *
     * @ORM\Column(name="image_babysitter", type="blob", nullable=true)
     */
    private $imageBabysitter;

    /**
     * @var string
     *
     * @ORM\Column(name="mp_babysitter", type="string", length=30, nullable=true)
     */
    private $mpBabysitter;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_babysitter", type="string", length=20, nullable=true)
     */
    private $niveauBabysitter;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_mission_babysitter", type="integer", nullable=true)
     */
    private $nbMissionBabysitter;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_enfant_babysitter", type="integer", nullable=true)
     */
    private $nbEnfantBabysitter;

    /**
     * @var string
     *
     * @ORM\Column(name="distancemax_babysitter", type="string", length=11, nullable=true)
     */
    private $distancemaxBabysitter;

    /**
     * @var string
     *
     * @ORM\Column(name="description_babysitter", type="string", length=2000, nullable=true)
     */
    private $descriptionBabysitter;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_heur", type="integer", nullable=false)
     */
    private $tarifHeur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable", type="boolean", nullable=true)
     */
    private $enable;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;

    function getIdBabysitter() {
        return $this->idBabysitter;
    }

    function getCinBabysitter() {
        return $this->cinBabysitter;
    }

    function getNomBabysitter() {
        return $this->nomBabysitter;
    }

    function getPrenomBabysitter() {
        return $this->prenomBabysitter;
    }

    function getSexeBabysitter() {
        return $this->sexeBabysitter;
    }

    function getVille() {
        return $this->ville;
    }

    function getAdresseBabysitter() {
        return $this->adresseBabysitter;
    }

    function getAgeBabysitter() {
        return $this->ageBabysitter;
    }

    function getNumtelBabysitter() {
        return $this->numtelBabysitter;
    }

    function getMailBabysitter() {
        return $this->mailBabysitter;
    }

    function getImageBabysitter() {
        return $this->imageBabysitter;
    }

    function getMpBabysitter() {
        return $this->mpBabysitter;
    }

    function getNiveauBabysitter() {
        return $this->niveauBabysitter;
    }

    function getNbMissionBabysitter() {
        return $this->nbMissionBabysitter;
    }

    function getNbEnfantBabysitter() {
        return $this->nbEnfantBabysitter;
    }

    function getDistancemaxBabysitter() {
        return $this->distancemaxBabysitter;
    }

    function getDescriptionBabysitter() {
        return $this->descriptionBabysitter;
    }

    function getTarifHeur() {
        return $this->tarifHeur;
    }

    function getEnable() {
        return $this->enable;
    }

    function getNote() {
        return $this->note;
    }

    function setIdBabysitter($idBabysitter) {
        $this->idBabysitter = $idBabysitter;
    }

    function setCinBabysitter($cinBabysitter) {
        $this->cinBabysitter = $cinBabysitter;
    }

    function setNomBabysitter($nomBabysitter) {
        $this->nomBabysitter = $nomBabysitter;
    }

    function setPrenomBabysitter($prenomBabysitter) {
        $this->prenomBabysitter = $prenomBabysitter;
    }

    function setSexeBabysitter($sexeBabysitter) {
        $this->sexeBabysitter = $sexeBabysitter;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setAdresseBabysitter($adresseBabysitter) {
        $this->adresseBabysitter = $adresseBabysitter;
    }

    function setAgeBabysitter($ageBabysitter) {
        $this->ageBabysitter = $ageBabysitter;
    }

    function setNumtelBabysitter($numtelBabysitter) {
        $this->numtelBabysitter = $numtelBabysitter;
    }

    function setMailBabysitter($mailBabysitter) {
        $this->mailBabysitter = $mailBabysitter;
    }

    function setImageBabysitter($imageBabysitter) {
        $this->imageBabysitter = $imageBabysitter;
    }

    function setMpBabysitter($mpBabysitter) {
        $this->mpBabysitter = $mpBabysitter;
    }

    function setNiveauBabysitter($niveauBabysitter) {
        $this->niveauBabysitter = $niveauBabysitter;
    }

    function setNbMissionBabysitter($nbMissionBabysitter) {
        $this->nbMissionBabysitter = $nbMissionBabysitter;
    }

    function setNbEnfantBabysitter($nbEnfantBabysitter) {
        $this->nbEnfantBabysitter = $nbEnfantBabysitter;
    }

    function setDistancemaxBabysitter($distancemaxBabysitter) {
        $this->distancemaxBabysitter = $distancemaxBabysitter;
    }

    function setDescriptionBabysitter($descriptionBabysitter) {
        $this->descriptionBabysitter = $descriptionBabysitter;
    }

    function setTarifHeur($tarifHeur) {
        $this->tarifHeur = $tarifHeur;
    }

    function setEnable($enable) {
        $this->enable = $enable;
    }

    function setNote($note) {
        $this->note = $note;
    }


}
