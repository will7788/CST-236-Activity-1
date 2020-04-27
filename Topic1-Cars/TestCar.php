<?php

require_once 'Car.php';

$car = new Car();
$car->addEngine();
$car->addTires(3);
$car->addTires(4);
$car->fillTires(20);
$car->fillTires(32);
$car->start();
$car->stop();
?>