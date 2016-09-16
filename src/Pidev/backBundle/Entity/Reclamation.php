<?php

namespace Pidev\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="sujetReclamation", type="string", length=255, nullable=false)
     */
    private $sujetreclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="dateReclamation", type="string", length=255, nullable=false)
     */
    private $datereclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Parents")
     * @ORM\JoinColumn(name="id_parent", referencedColumnName="id_parent", onDelete="CASCADE")
     */
    private $idParent;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_postal", type="integer", nullable=false)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=false)
     */
    private $message;
    function getIdreclamation() {
        return $this->idreclamation;
    }

    function getSujetreclamation() {
        return $this->sujetreclamation;
    }

    function getDatereclamation() {
        return $this->datereclamation;
    }

    function getEmail() {
        return $this->email;
    }

    function getType() {
        return $this->type;
    }

    function getIdParent() {
        return $this->idParent;
    }

    function getCodePostal() {
        return $this->codePostal;
    }

    function getMessage() {
        return $this->message;
    }

    function setIdreclamation($idreclamation) {
        $this->idreclamation = $idreclamation;
    }

    function setSujetreclamation($sujetreclamation) {
        $this->sujetreclamation = $sujetreclamation;
    }

    function setDatereclamation($datereclamation) {
        $this->datereclamation = $datereclamation;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setIdParent($idParent) {
        $this->idParent = $idParent;
    }

    function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    function setMessage($message) {
        $this->message = $message;
    }



}
