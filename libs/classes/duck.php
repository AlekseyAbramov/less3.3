<?php

namespace classes;

require_once 'product.php';
require_once 'interfaces'. DIRECTORY_SEPARATOR. 'view.php';

class duck extends product implements viewPrice {
    public $wt;
    public function __construct($brand, $price, $wt) {
        $this->brand = $brand;
        $this->price = $price;
        $this->wt = $wt;
    }
    public function getPrices() {
        $this->getPrice = $this->wt * $this->price;
        if (!empty($this->discount)) {
            $this->getPrice = $this->getPrice  * (100 - $this->getPrice) / 100;
        }
        return $this->getPrice;
    }
    public function viewPrice() {
        if (!empty($this->getPrice) && !empty($this->discount)) {
            echo 'Цена утки '. $this->brand. ' весом'. $this->wt. 'кг. составляет '. $this->getPrice. ' руб.'. '<br>';
            echo '<br>'. 'Ваша скидка составила '. $this->discount. '%'. '<br>';
        } else {
            $this->getPrice = $this->wt * $this->price;
            echo 'Цена утки '. $this->brand. ' весом '. $this->wt. 'кг., без расчета скидки, составляет '. $this->getPrice. ' руб.'. '<br>';
        }
    }
}
