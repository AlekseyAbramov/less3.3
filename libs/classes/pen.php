<?php
namespace classes;

require_once 'product.php';
require_once 'interfaces'. DIRECTORY_SEPARATOR. 'view.php';

class pen extends product implements viewPrice {
    public function viewPrice() {
        if (!empty($this->getPrice)) {
            echo 'Цена автомобиля '. $this->brand. ' '. $this->model. ' составляет '. $this->getPrice. ' руб.'. '<br>';
            echo '<br>'. 'Ваша скидка составила '. $this->discount. '%'. '<br>';
        } else {
            echo 'Цена автомобиля '. $this->brand. ' '. $this->model. ', без расчета скидки, составляет '. $this->price. ' руб.'. '<br>';
        }
    }
}
