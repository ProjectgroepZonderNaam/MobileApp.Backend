<?php

namespace PGZN\MobileAppBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apps
 *
 * @ORM\Table(name="apps")
 * @ORM\Entity
 */
class Apps
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var float
     *
     * @ORM\Column(name="Price", type="decimal", nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="Link", type="string", length=255, nullable=false)
     */
    private $link;

        /**
     * @var string
     *
     * @ORM\Column(name="IconUrl", type="string", length=255, nullable=false)
     */
    private $iconurl;
    
    
        /**
     * @var int
     *
     * @ORM\Column(name="Rating", type="integer", nullable=false)
     */
    private $rating;

            /**
     * @var boolean
     *
     * @ORM\Column(name="Featured", type="boolean", nullable=false)
     */
    private $featured;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Apps
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
     * @return Apps
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
     * Set price
     *
        * @param float $price
     * @return Apps
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Apps
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
    
    
        /**
     * Set iconurl
     *
     * @param string $url
     * @return Apps
     */
    public function setIconurl($url)
    {
        $this->iconurl = $url;
    
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
     * Set rating
     *
     * @param integer $rating
     * @return Apps
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    
        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }
    
            /**
     * Set rating
     *
     * @param boolean $feutured
     * @return Apps
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;
    
        return $this;
    }

    /**
     * Get rating
     *
     * @return boolean 
     */
    public function getFeatured()
    {
        return $this->featured;
    }
}