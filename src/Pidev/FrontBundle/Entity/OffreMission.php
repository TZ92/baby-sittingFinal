<?php

namespace Pidev\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreMission
 *
 * @ORM\Table(name="offre_mission")
 * @ORM\Entity
 */
class OffreMission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_offre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_mission", type="string", length=25, nullable=false)
     */
    private $lieuMission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire_garde", type="string", length=1000, nullable=false)
     */
    private $horaireGarde;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_enfant", type="integer", nullable=false)
     */
    private $nombreEnfant;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=20, nullable=false)
     */
    private $sexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=true)
     */
    private $idParent;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_service", type="integer", nullable=true)
     */
    private $idService;
    function getIdOffre() {
        return $this->idOffre;
    }

    function getLieuMission() {
        return $this->lieuMission;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function getDateFin() {
        return $this->dateFin;
    }

    function getHoraireGarde() {
        return $this->horaireGarde;
    }

    function getNombreEnfant() {
        return $this->nombreEnfant;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getIdParent() {
        return $this->idParent;
    }

    function getIdService() {
        return $this->idService;
    }

    function setIdOffre($idOffre) {
        $this->idOffre = $idOffre;
    }

    function setLieuMission($lieuMission) {
        $this->lieuMission = $lieuMission;
    }

    function setDateDebut(\DateTime $dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    function setDateFin(\DateTime $dateFin) {
        $this->dateFin = $dateFin;
    }

    function setHoraireGarde($horaireGarde) {
        $this->horaireGarde = $horaireGarde;
    }

    function setNombreEnfant($nombreEnfant) {
        $this->nombreEnfant = $nombreEnfant;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setIdParent($idParent) {
        $this->idParent = $idParent;
    }

    function setIdService($idService) {
        $this->idService = $idService;
    }



}
