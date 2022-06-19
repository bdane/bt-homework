<?php

include 'ShoppingCartItem.php';

class ShoppingCart extends ShoppingCartItem
{
    protected $cartItems = [];

    /* public function addToCartItems($product)
    {
        $this->cartItems[] = $product;
    } */

    public function getCartItems()
    {
        return $this->cartItems;
    }

    public function addToCart($product, $quantity = 1)
    {
        if (in_array($product, $this->cartItems)) {
            if ($this->quantity < $this->stock) {
                $quantity++;
                $this->stock--;
                $this->quantity = $quantity;
            }
        } else {
            $this->cartItems[] = $product;
            //return $this->cartItems;
        }
    }

    public function removeItem($productBarcode, $quantity)
    {
        foreach ($this->cartItems as $oneProduct) {
            if ($oneProduct['barcode'] == $productBarcode) {
                if ($quantity <= 1) {
                    unset($oneProduct);
                } else {
                    $quantity--;
                    $this->stock++;
                    $this->quantity = $quantity;
                }
            }
        }
    }
}
