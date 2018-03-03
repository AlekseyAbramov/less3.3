<?php
namespace classes;

require_once 'cart.php';

class order extends cart {
    public function __construct()
    {
        ;
    }

    public function getOrder()
    {
        echo '<h1>Ваш заказ</h1>';
        echo '<table><thedd>'. '<tr><td>Название</td><td>Цена</td><td>Количество</td></tr>'. '</thedd>';
        echo '<tbody>';
        for ($i = 0;$i < $_SESSION['id']; $i++){
            echo '<tr>';
            echo '<td>'. $_SESSION['product_name'][$i]. '</td>';
            echo '<td>'. $_SESSION['product_price'][$i]. '</td>';
            echo '<td>'. $_SESSION['product_count'][$i]. '</td';
            echo '</tr>';
        }
        echo '<tr><td>Итого</td><td colspan="2">'. $this->cartSumm(). '</td></tbody></table>';
    }
}
