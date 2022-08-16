<?php

include './database/DB.php';

class Products // extends DataBase
{
    private $barcode;
    private $title;
    private $image;
    private $price;
    private $stock;
    private $description;
    private $category;

    public function setNewProduct($barcode, $title, $img, $price, $stock, $description, $category)
    {
        $this->barcode = $barcode;
        $this->title = $title;
        $this->image = $img;
        $this->price = $price;
        $this->stock = $stock;
        $this->description = $description;
        $this->category = $category;

        $sql = "INSERT INTO products (barcode, title, img, price, stock, " . 'description' . ", category) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $stmt = DataBase::connect()->prepare($sql);
        $stmt->execute([$barcode, $title, $img, $price, $stock, $description, $category]);
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM products;";
        $stmt = DataBase::connect()->query($sql);
        $products = $stmt->fetchAll();

        return $products;
    }

    public function getAvailableProducts()
    {
        $sql = "SELECT * FROM products WHERE stock > 0;";
        $stmt = DataBase::connect()->query($sql);
        $products = $stmt->fetchAll();

        return $products;
    }

    public function getThreeProducts()
    {
        $randProd = [];
        foreach ($this->getAvailableProducts() as $product) {
            if (count($randProd) >= 3) {
                break;
            }
            $randProd[] = $product;
        }
        return $randProd;
    }

    public function getSixProducts()
    {
        $randProd = [];
        foreach ($this->getAvailableProducts() as $product) {
            if (count($randProd) >= 6) {
                break;
            }
            $randProd[] = $product;
        }
        return $randProd;
    }

    public function productSearch($term)
    {
        $sql = "SELECT * FROM products;";
        $stmt = DataBase::connect()->query($sql);
        $products = $stmt->fetchAll();

        $searchResult = [];
        foreach ($products as $product) {
            if (str_contains(strtolower($product['title']), strtolower($term))) {
                $searchResult[] = $product;
            }
        }
        return $searchResult;
    }

    public function sortByTitleASC()
    {
        $sql = "SELECT * FROM products ORDER BY title;";
        $stmt = DataBase::connect()->query($sql);
        $products = $stmt->fetchAll();

        return $products;
    }

    public function sortByTitleDESC()
    {
        $sql = "SELECT * FROM products ORDER BY title DESC;";
        $stmt = DataBase::connect()->query($sql);
        $products = $stmt->fetchAll();

        return $products;
    }

    public function sortByPriceASC()
    {
        $sql = "SELECT * FROM products ORDER BY price;";
        $stmt = DataBase::connect()->query($sql);
        $products = $stmt->fetchAll();

        return $products;
    }

    public function sortByPriceDESC()
    {
        $sql = "SELECT * FROM products ORDER BY price DESC;";
        $stmt = DataBase::connect()->query($sql);
        $products = $stmt->fetchAll();

        return $products;
    }

    public function getByCategory($category)
    {
        $sql = "SELECT * FROM products WHERE category = '" . $category . "';";
        $stmt = DataBase::connect()->query($sql);
        $products = $stmt->fetchAll();

        return $products;
    }
}
