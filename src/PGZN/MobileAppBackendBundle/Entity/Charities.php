<?php

namespace PGZN\MobileAppBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Charities
 *
 * @ORM\Table(name="charities")
 * @ORM\Entity
 */
class Charities
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="IconUrl", type="string", length=255, nullable=false)
     */
    private $iconurl;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     * @return Charities
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Charities
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set iconurl
     *
     * @param string $iconurl
     * @return Charities
     */
    public function setIconurl($iconurl)
    {
        $this->iconurl = $iconurl;
    
        return $this;
    }

    /**
     * Get iconurl
     *
     * @return string 
     */
    public function getIconurl()
    {
        return $this->iconurl;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}