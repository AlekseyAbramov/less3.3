<?php

namespace classes;

require_once 'product.php';
require_once 'interfaces'. DIRECTORY_SEPARATOR. 'view.php';

class televisor extends product implements viewPrice {
    public $diagonal;
    public function viewPrice()
    {
        if (!empty($this->getPrice)) {
            echo 'Цена телеыизора '. $this->brand. ' '. $this->model. ' составляет '. $this->getPrice. ' руб.'. '<br>';
            echo '<br>'. 'Ваша скидка составила '. $this->discount. '%'. '<br>';
        } else {
            echo 'Цена телевизора '. $this->brand. ' '. $this->model. ', без расчета скидки, составляет '. $this->price. ' руб.'. '<br>';
        }
    }
}
