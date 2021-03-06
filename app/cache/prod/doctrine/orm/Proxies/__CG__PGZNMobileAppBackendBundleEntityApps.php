<?php

namespace Proxies\__CG__\PGZN\MobileAppBackendBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Apps extends \PGZN\MobileAppBackendBundle\Entity\Apps implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setPrice($price)
    {
        $this->__load();
        return parent::setPrice($price);
    }

    public function getPrice()
    {
        $this->__load();
        return parent::getPrice();
    }

    public function setLink($link)
    {
        $this->__load();
        return parent::setLink($link);
    }

    public function getLink()
    {
        $this->__load();
        return parent::getLink();
    }

    public function setIconurl($url)
    {
        $this->__load();
        return parent::setIconurl($url);
    }

    public function getIconurl()
    {
        $this->__load();
        return parent::getIconurl();
    }

    public function setRating($rating)
    {
        $this->__load();
        return parent::setRating($rating);
    }

    public function getRating()
    {
        $this->__load();
        return parent::getRating();
    }

    public function setFeatured($featured)
    {
        $this->__load();
        return parent::setFeatured($featured);
    }

    public function getFeatured()
    {
        $this->__load();
        return parent::getFeatured();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'description', 'price', 'link', 'iconurl', 'rating', 'featured');
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