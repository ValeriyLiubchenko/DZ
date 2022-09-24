<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/src/autoload.php';

$currency1 = new \Hillel\Currency('UAH');
//var_dump($currency1);
$currency2 = new \Hillel\Currency('wpvwievn');
//var_dump($currency2);
$currency3 = new \Hillel\Currency('USD');
//var_dump($currency3);
$money1 = new \Hillel\Money(123,'USD');
$money2 = new \Hillel\Money(123, 'UAH');
//var_dump($money1->equals($money2));
$money3 = new \Hillel\Money(145, 'USD');
//var_dump($money3->add($money1));
//var_dump($money3->add($money2));
