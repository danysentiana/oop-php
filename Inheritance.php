<?php

require_once "data/Vehicle.php";

$ve = new Vehicle;
$ve->brand = "Yamaha";
$ve->sayHello("Budi");

$motor = new Motor;
$motor->brand = "Honda";
$motor->sayHello("Joe");