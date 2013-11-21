<?php

namespace Geekhub\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="type_product")
 */
class TypeProduct
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer $id
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @var string title
     */
    protected $title;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Manufactured", inversedBy="type_product")
     * @ORM\JoinTable(name="manufactured_typeproduct")
     */
    protected $manufactured;
     /**
     * Constructor
     */
    public function __construct()
    {
        $this->manufactured = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set title
     *
     * @param string $title
     * @return TypeProduct
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add manufactured
     *
     * @param \Geekhub\ShopBundle\Entity\Manufactured $manufactured
     * @return TypeProduct
     */
    public function addManufactured(\Geekhub\ShopBundle\Entity\Manufactured $manufactured)
    {
        $this->manufactured[] = $manufactured;
    
        return $this;
    }

    /**
     * Remove manufactured
     *
     * @param \Geekhub\ShopBundle\Entity\Manufactured $manufactured
     */
    public function removeManufactured(\Geekhub\ShopBundle\Entity\Manufactured $manufactured)
    {
        $this->manufactured->removeElement($manufactured);
    }

    /**
     * Get manufactured
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getManufactured()
    {
        return $this->manufactured;
    }
}