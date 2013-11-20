<?php

namespace Geekhub\ShopBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="manufactured")
 */
class Manufactured
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
     * @ORM\OneToMany(targetEntity="Product", mappedBy="manufactured")
     */
    protected $product;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="TypeProduct", mappedBy="manufactured")
     */
    protected $typeProduct;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
        $this->typeProduct = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Manufactured
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
     * Add product
     *
     * @param \Geekhub\ShopBundle\Entity\Product $product
     * @return Manufactured
     */
    public function addProduct(\Geekhub\ShopBundle\Entity\Product $product)
    {
        $this->product[] = $product;
    
        return $this;
    }

    /**
     * Remove product
     *
     * @param \Geekhub\ShopBundle\Entity\Product $product
     */
    public function removeProduct(\Geekhub\ShopBundle\Entity\Product $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Add typeProduct
     *
     * @param \Geekhub\ShopBundle\Entity\TypeProduct $typeProduct
     * @return Manufactured
     */
    public function addTypeProduct(\Geekhub\ShopBundle\Entity\TypeProduct $typeProduct)
    {
        $this->typeProduct[] = $typeProduct;
    
        return $this;
    }

    /**
     * Remove typeProduct
     *
     * @param \Geekhub\ShopBundle\Entity\TypeProduct $typeProduct
     */
    public function removeTypeProduct(\Geekhub\ShopBundle\Entity\TypeProduct $typeProduct)
    {
        $this->typeProduct->removeElement($typeProduct);
    }

    /**
     * Get typeProduct
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypeProduct()
    {
        return $this->typeProduct;
    }
}