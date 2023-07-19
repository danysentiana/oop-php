<?php

require_once "data/Animal.php";

use animal\{Animal as A, Dog as D};

$animal = new A("Lion");
echo $animal->greet() . PHP_EOL;

$dog = new D("Jim");
echo $dog->greet() . PHP_EOL;
echo $dog->parentGreet();

