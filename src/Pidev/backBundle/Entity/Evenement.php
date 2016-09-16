<?php

namespace Pidev\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    
    public $path;
    
     /**
     * @Assert\File(maxSize="6000000")
     */
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvenement", type="date", nullable=false)
     */
    private $dateevenement;

    function getIdevenement() {
        return $this->idevenement;
    }

    function getNomevenement() {
        return $this->nomevenement;
    }

    function getThemeevenement() {
        return $this->themeevenement;
    }

    function getAdresseevenement() {
        return $this->adresseevenement;
    }

    function getNbplacemax() {
        return $this->nbplacemax;
    }

    function getAfficheevenement() {
        return $this->afficheevenement;
    }

    function getDateevenement() {
        return $this->dateevenement;
    }

    function setIdevenement($idevenement) {
        $this->idevenement = $idevenement;
    }

    function setNomevenement($nomevenement) {
        $this->nomevenement = $nomevenement;
    }

    function setThemeevenement($themeevenement) {
        $this->themeevenement = $themeevenement;
    }

    function setAdresseevenement($adresseevenement) {
        $this->adresseevenement = $adresseevenement;
    }

    function setNbplacemax($nbplacemax) {
        $this->nbplacemax = $nbplacemax;
    }

    function setAfficheevenement($afficheevenement) {
        $this->afficheevenement = $afficheevenement;
    }

    function setDateevenement(\DateTime $dateevenement) {
        $this->dateevenement = $dateevenement;
    }
    
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/evenement';
    }
    public function upload()
    {
    // la propriété « file » peut être vide si le champ n'est pas requis
    if (null === $this->afficheevenement) {
        return;
    }

    // utilisez le nom de fichier original ici mais
    // vous devriez « l'assainir » pour au moins éviter
    // quelconques problèmes de sécurité

    // la méthode « move » prend comme arguments le répertoire cible et
    // le nom de fichier cible où le fichier doit être déplacé
    $this->afficheevenement->move($this->getUploadRootDir(), $this->afficheevenement->getClientOriginalName());

    // définit la propriété « path » comme étant le nom de fichier où vous
    // avez stocké le fichier
    $this->path = $this->afficheevenement->getClientOriginalName();

    // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
    $this->afficheevenement = null;
    }
    
}
