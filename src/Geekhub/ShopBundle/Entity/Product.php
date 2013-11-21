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
     * @var integer $id
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=150)
     * @var string name
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     * @var string description
     */
    protected $description;

    /**
     * @ORM\Column(type="integer")
     * @var integer price
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
     * @param integer $price
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
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set category
     *
     * @param \Geekhub\ShopBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\Geekhub\ShopBundle\Entity\Category $category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Geekhub\ShopBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set manufactured
     *
     * @param \Geekhub\ShopBundle\Entity\Manufactured $manufactured
     * @return Product
     */
    public function setManufactured(\Geekhub\ShopBundle\Entity\Manufactured $manufactured)
    {
        $this->manufactured = $manufactured;
    
        return $this;
    }

    /**
     * Get manufactured
     *
     * @return \Geekhub\ShopBundle\Entity\Manufactured 
     */
    public function getManufactured()
    {
        return $this->manufactured;
    }
}