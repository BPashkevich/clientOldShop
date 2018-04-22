<?php

namespace BPashkevich\CatalogBundle\Entity;

class ProductOrder
{
    private $id;

    private $products;

    private $configurableProducts;

    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->configurableProducts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add product.
     *
     * @param \BPashkevich\ProductBundle\Entity\Product $product
     *
     * @return ProductOrder
     */
    public function addProduct(\BPashkevich\ProductBundle\Entity\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product.
     *
     * @param \BPashkevich\ProductBundle\Entity\Product $product
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeProduct(\BPashkevich\ProductBundle\Entity\Product $product)
    {
        return $this->products->removeElement($product);
    }

    /**
     * Get products.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add configurableProduct.
     *
     * @param \BPashkevich\ProductBundle\Entity\ConfigurableProduct $configurableProduct
     *
     * @return ProductOrder
     */
    public function addConfigurableProduct(\BPashkevich\ProductBundle\Entity\ConfigurableProduct $configurableProduct)
    {
        $this->configurableProducts[] = $configurableProduct;

        return $this;
    }

    /**
     * Remove configurableProduct.
     *
     * @param \BPashkevich\ProductBundle\Entity\ConfigurableProduct $configurableProduct
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeConfigurableProduct(\BPashkevich\ProductBundle\Entity\ConfigurableProduct $configurableProduct)
    {
        return $this->configurableProducts->removeElement($configurableProduct);
    }

    /**
     * Get configurableProducts.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConfigurableProducts()
    {
        return $this->configurableProducts;
    }

    /**
     * Set users.
     *
     * @param \BPashkevich\UserBundle\Entity\User|null $users
     *
     * @return ProductOrder
     */
    public function setUsers(\BPashkevich\UserBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users.
     *
     * @return \BPashkevich\UserBundle\Entity\User|null
     */
    public function getUsers()
    {
        return $this->users;
    }
}
