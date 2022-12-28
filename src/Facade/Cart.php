<?php

namespace Hoangm\Pattern\Facade;

use Hoangm\Pattern\Facade\Product;

class Cart {
    private $products = array();

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }
}