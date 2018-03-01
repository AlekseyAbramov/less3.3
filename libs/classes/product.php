<?php

namespace classes;

abstract class product {
    public $brand;
    public $discount;
    public $price;
    public $getPrice;
    public function __construct($brand, $price) {
        $this->brand = $brand;
        $this->price = $price;
    }
        public function getPrices() {
        if (!empty($this->discount)) {
            $this->getPrice = $this->price  * (100 - $this->discount) / 100;
        } else {
            $this->getPrice = $this->price;
        }
        return $this->getPrice;
    }
}
