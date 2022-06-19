<?php

include_once 'Product.php';

class ShoppingCartItem
{
    protected Product $product;
    protected $quantity;

    public function setQuantity($quantity)
    {
        if (is_numeric($quantity) && $quantity > 0) {
            $this->quantity = $quantity;
        }
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}
