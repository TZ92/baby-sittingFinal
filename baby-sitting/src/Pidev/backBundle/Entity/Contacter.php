<?php

namespace Pidev\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacter
 *
 * @ORM\Table(name="contacter")
 * @ORM\Entity
 */
class Contacter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idParent;

    /**
     * @var \Babysitter
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Babysitter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_babysitter", referencedColumnName="id_babysitter")
     * })
     */
    private $idBabysitter;


}
