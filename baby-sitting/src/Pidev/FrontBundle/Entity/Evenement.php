<?php

namespace Pidev\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEvenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEvenement", type="string", length=50, nullable=false)
     */
    private $nomevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="themeEvenement", type="string", length=50, nullable=false)
     */
    private $themeevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEvenement", type="string", length=50, nullable=false)
     */
    private $adresseevenement;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbPlaceMax", type="integer", nullable=false)
     */
    private $nbplacemax;

    /**
     * @var string
     *
     * @ORM\Column(name="afficheEvenement", type="blob", nullable=false)
     */
    private $afficheevenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvenement", type="date", nullable=false)
     */
    private $dateevenement;


}
