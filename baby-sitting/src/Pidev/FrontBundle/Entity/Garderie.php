<?php

namespace Pidev\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Garderie
 *
 * @ORM\Table(name="garderie")
 * @ORM\Entity
 */
class Garderie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_garderie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGarderie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_garderie", type="string", length=50, nullable=false)
     */
    private $nomGarderie;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_garderie", type="string", length=20, nullable=false)
     */
    private $villeGarderie;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_garderie", type="text", nullable=false)
     */
    private $adresseGarderie;

    /**
     * @var integer
     *
     * @ORM\Column(name="num Tel", type="integer", nullable=false)
     */
    private $numTel;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite_garderie", type="integer", nullable=false)
     */
    private $capaciteGarderie;

    /**
     * @var string
     *
     * @ORM\Column(name="description_garderie", type="text", nullable=false)
     */
    private $descriptionGarderie;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_garderie", type="text", nullable=false)
     */
    private $contactGarderie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout_garderie", type="date", nullable=false)
     */
    private $dateAjoutGarderie;


}
