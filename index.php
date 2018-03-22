<?php

require_once 'autoloader.php';
spl_autoload_register('myAutoload');
session_start();
        
$car1 = new classes\car('Lada', 'Granta', 400000);
$car1->discount = 10;
$newDiscount = 15;
$car1->editDiscount($newDiscount);
$car1->getPrices();
$car1->viewPrice();
       
$duck1 = new classes\duck('Ярославский бройлер', 180, 0.8);
$duck1->viewPrice();


$cart1 = new classes\cart($duck1->brand, $duck1->getPrices(), 2);
$cart1->addToCart($car1->brand. ' '. $car1->model, $car1->getPrices(), 1);
$order1 = new classes\order();
$order1->getOrder();
