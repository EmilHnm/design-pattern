<?php

namespace Hoangm\Pattern\Facade;

use Hoangm\Pattern\Facade\Cart;
use Hoangm\Pattern\Facade\Product;

class OrderManager {
    private $cart;
    private $payment;

    public function __construct(Cart $cart,Payment $payment)
    {
        $this->cart = $cart;
        $this->payment = $payment;
    }

    public function addProductToCart(Product $product)
    {
        $this->cart->addProduct($product);
    }

    public function getCartTotal()
    {
        return $this->cart->getTotal();
    }

    public function processPayment($paymentDetails)
    {
        return $this->payment->process($paymentDetails);
    }
}