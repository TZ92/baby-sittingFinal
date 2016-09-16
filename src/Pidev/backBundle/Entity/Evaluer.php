<?php

namespace Pidev\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluer
 *
 * @ORM\Table(name="evaluer")
 * @ORM\Entity
 */
class Evaluer
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
     * @var integer
     *
     * @ORM\Column(name="id_service", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idService;


}
