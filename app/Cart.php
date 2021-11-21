<?php
namespace App;

class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function _constant($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }

    public function addCart($product, $id){
        $newProduct = ['quantity' => 0,'price' => $product->product_price,'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $product)){
                 $newProduct = $product[$id];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product->product_price;
        $newProduct['productInfo'] = $newProduct['quantity'];
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->product_price;
        $this->totalQuantity++;  
    }
}

?>