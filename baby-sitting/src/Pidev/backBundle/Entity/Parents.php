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


}
