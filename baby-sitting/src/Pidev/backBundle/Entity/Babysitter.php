<?php

namespace Pidev\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Babysitter
 *
 * @ORM\Table(name="babysitter")
 * @ORM\Entity
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


}
