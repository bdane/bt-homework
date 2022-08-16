<?php

//include './database/DB.php';
include './models/m-products.php';

class SingleProduct extends Products
{
    public function getOneProductByBarcode($barcode)
    {
        $sql = "SELECT * from products WHERE barcode = " . $barcode . ";";
        $stmt = DataBase::connect()->query($sql);
        $product = $stmt->fetch();

        return $product;
    }

    public function getNextProduct($barcode)
    {
        $availableProducts = $this->getAvailableProducts();
        foreach ($availableProducts as $key => $singleProduct) {
            if ($singleProduct['barcode'] == $barcode) {
                if ($key < count($availableProducts) - 1) {
                    return $availableProducts[$key + 1];
                } else {
                    return $availableProducts[0];
                }
            }
        }
    }

    public function getPrevProduct($barcode)
    {
        $availableProducts = $this->getAvailableProducts();
        foreach ($availableProducts as $key => $singleProduct) {
            if ($singleProduct['barcode'] == $barcode) {
                if ($key > 0) {
                    return $availableProducts[$key - 1];
                } else {
                    return $availableProducts[count($availableProducts) - 1];
                }
            }
        }
    }
}
