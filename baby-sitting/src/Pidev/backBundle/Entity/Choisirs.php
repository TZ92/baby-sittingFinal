<?php

namespace Pidev\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Choisirs
 *
 * @ORM\Table(name="choisirs")
 * @ORM\Entity
 */
class Choisirs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_service", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idService;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_offre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOffre;


}
