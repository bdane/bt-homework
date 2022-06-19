<?php

class Product
{
    protected $barcode;
    protected $title;
    protected $price;
    protected $stock;
    protected $allProducts = [];

    /* public function __construct($barcode, $title, $price, $stock)
    {
        $this->barcode = $barcode;
        $this->title = $title;
        $this->price = $price;
        $this->stock = $stock;
    } */

    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    public function getBarcode()
    {
        return $this->barcode;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getAllProducts()
    {
        return $this->allProducts;
    }

    public function addToAllProducts()
    {
        $oneProduct = ['barcode' => $this->barcode, 'title' => $this->title, 'price' => $this->price, 'stock' => $this->stock];
        //array_push($this->allProducts, $oneProduct);
        $this->allProducts[] = $oneProduct;
    }

    public function removeFromAllProducts($productBarcode)
    {
        foreach ($this->allProducts as $oneProduct) {
            if ($oneProduct['barcode'] == $productBarcode) {
                unset($oneProduct);
            }
        }
    }
}
