<?php

namespace Proxies\__CG__\Pidev\backBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Parents extends \Pidev\backBundle\Entity\Parents implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getIdParent()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idParent"];
        }
        $this->__load();
        return parent::getIdParent();
    }

    public function getCinParent()
    {
        $this->__load();
        return parent::getCinParent();
    }

    public function getNomParent()
    {
        $this->__load();
        return parent::getNomParent();
    }

    public function getPrenomParent()
    {
        $this->__load();
        return parent::getPrenomParent();
    }

    public function getVilleParent()
    {
        $this->__load();
        return parent::getVilleParent();
    }

    public function getAdresseParent()
    {
        $this->__load();
        return parent::getAdresseParent();
    }

    public function getNumtelParent()
    {
        $this->__load();
        return parent::getNumtelParent();
    }

    public function getMailParent()
    {
        $this->__load();
        return parent::getMailParent();
    }

    public function getNbEnfant()
    {
        $this->__load();
        return parent::getNbEnfant();
    }

    public function getMdp()
    {
        $this->__load();
        return parent::getMdp();
    }

    public function getInfoEnfant()
    {
        $this->__load();
        return parent::getInfoEnfant();
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function getDateInscri()
    {
        $this->__load();
        return parent::getDateInscri();
    }

    public function getDateMaj()
    {
        $this->__load();
        return parent::getDateMaj();
    }

    public function getEnable()
    {
        $this->__load();
        return parent::getEnable();
    }

    public function setIdParent($idParent)
    {
        $this->__load();
        return parent::setIdParent($idParent);
    }

    public function setCinParent($cinParent)
    {
        $this->__load();
        return parent::setCinParent($cinParent);
    }

    public function setNomParent($nomParent)
    {
        $this->__load();
        return parent::setNomParent($nomParent);
    }

    public function setPrenomParent($prenomParent)
    {
        $this->__load();
        return parent::setPrenomParent($prenomParent);
    }

    public function setVilleParent($villeParent)
    {
        $this->__load();
        return parent::setVilleParent($villeParent);
    }

    public function setAdresseParent($adresseParent)
    {
        $this->__load();
        return parent::setAdresseParent($adresseParent);
    }

    public function setNumtelParent($numtelParent)
    {
        $this->__load();
        return parent::setNumtelParent($numtelParent);
    }

    public function setMailParent($mailParent)
    {
        $this->__load();
        return parent::setMailParent($mailParent);
    }

    public function setNbEnfant($nbEnfant)
    {
        $this->__load();
        return parent::setNbEnfant($nbEnfant);
    }

    public function setMdp($mdp)
    {
        $this->__load();
        return parent::setMdp($mdp);
    }

    public function setInfoEnfant($infoEnfant)
    {
        $this->__load();
        return parent::setInfoEnfant($infoEnfant);
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function setDateInscri(\DateTime $dateInscri)
    {
        $this->__load();
        return parent::setDateInscri($dateInscri);
    }

    public function setDateMaj(\DateTime $dateMaj)
    {
        $this->__load();
        return parent::setDateMaj($dateMaj);
    }

    public function setEnable($enable)
    {
        $this->__load();
        return parent::setEnable($enable);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idParent', 'cinParent', 'nomParent', 'prenomParent', 'villeParent', 'adresseParent', 'numtelParent', 'mailParent', 'nbEnfant', 'mdp', 'infoEnfant', 'description', 'dateInscri', 'dateMaj', 'enable');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}