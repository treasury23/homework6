<?php

namespace Geekhub\ShopBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="integer")
     */
    protected $price;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="product")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\ManyToOne(targetEntity="Manufactured", inversedBy="product")
     * @ORM\JoinColumn(name="manufactured_id", referencedColumnName="id")
     */
    protected $manufactured;

    public function __constract()
    {
        $this->category = new ArrayCollection();
        $this->manufactured = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Product
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
     * @return Product
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
     * @return Product
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
     * @param ArrayCollection $category
     * @return $this
     */
    public function setCategory(ArrayCollection $category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param ArrayCollection $manufactured
     * @return $this
     */
    public function setManufactured(ArrayCollection $manufactured)
    {
        $this->manufactured = $manufactured;
    
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getManufactured()
    {
        return $this->manufactured;
    }
}