<?php

namespace classes;

class cart {
    public $name;
    public $price;
    public $count;
    public function __construct($name, $price, $count) {
        $_SESSION['id'] = 1;
        $_SESSION['product_name'][0] = $name;
        $_SESSION['product_price'][0] = $price;
        $_SESSION['product_count'][0] = $count;
    }

    public function addToCart($name, $price, $count){
        $_SESSION['product_name'][$_SESSION['id']] = $name;
        $_SESSION['product_price'][$_SESSION['id']] = $price;
        $_SESSION['product_count'][$_SESSION['id']] = $count;
        $_SESSION['id']++;
    }
    
    public function dellFromCart ($key) {
        if (!empty($_SESSION['product_name'][$key])){
            unset($_SESSION['product_name'][$key]);
            unset($_SESSION['product_price'][$key]);
            unset($_SESSION['product_count'][$key]);
            $_SESSION['id']--;
            sort($_SESSION['product_name']);
            sort($_SESSION['product_price']);
            sort($_SESSION['product_count']);
            $this->cartSumm();
        } else {
            echo'Такого товара в вашей карзине нет';
        }
        
    }
    
    public function cartSumm() {
        $_SESSION['cart_summ'] = 0;
        for ($i = 0;$i < $_SESSION['id']; $i++){
            $_SESSION['cart_summ'] = $_SESSION['cart_summ'] + $_SESSION['product_price'][$i] * $_SESSION['product_count'][$i];
        }
        return $_SESSION['cart_summ'];
    }
    
    public function updeteProductCount($newCount, $key) {
        $Count = int($newCount);
        $_SESSION['product_count'][$key] = $Count;
    }
}
