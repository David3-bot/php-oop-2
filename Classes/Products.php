<?php
require_once __DIR__  . "./Classes/Category.php";

class Products
{
    private $nameProduct;
    private $topicProduct;
    private $price;
    private $productImage;


    function __construct($_nameProduct, $_topicProduct, $_price, $_productImage)
    {

        $this->setnameProduct($_nameProduct);
        $this->settopicProduct($_topicProduct);
        $this->setprice($_price);
        $this->setproductImage($_productImage);
    }


    /**
     * Get the value of nameProduct
     */
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    /**
     * Set the value of nameProduct
     *
     * @return  self
     */
    public function setNameProduct($_nameProduct)
    {
        $this->nameProduct = $_nameProduct;

        return $this;
    }
    /**
     * Get the value of topicProduct
     */ 
    public function getTopicProduct()
    {
        return $this->topicProduct;
    }

    /**
     * Set the value of topicProduct
     *
     * @return  self
     */ 
    public function setTopicProduct($_topicProduct)
    {
        $this->topicProduct = $_topicProduct;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($_price)
    {
        $this->price = $_price;

        return $this;
    }

    /**
     * Get the value of productImage
     */ 
    public function getProductImage()
    {
        return $this->productImage;
    }

    /**
     * Set the value of productImage
     *
     * @return  self
     */ 
    public function setProductImage($_productImage)
    {
        $this->productImage = $_productImage;

        return $this;
    }
}
