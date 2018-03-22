<?php
namespace classes;

require_once 'product.php';
require_once 'interfaces'. DIRECTORY_SEPARATOR. 'view.php';

class pen extends product implements viewPrice {
    public $colorInk;
    public $inkType;
    public $material;
    public function viewPrice()
    {
        if (!empty($this->getPrice)) {
            echo 'Цена ручки '. $this->brand. ' '. $this->model. ' составляет '. $this->getPrice. ' руб.'. '<br>';
            echo '<br>'. 'Ваша скидка составила '. $this->discount. '%'. '<br>';
        } else {
            echo 'Цена ручки '. $this->brand. ' '. $this->model. ', без расчета скидки, составляет '. $this->price. ' руб.'. '<br>';
        }
    }
    public function editDiscount($discount) {
        $this->discount = $discount;
    }
}
