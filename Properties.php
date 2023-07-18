<?php

require "data/Person.php";

$person = new Person;

$person->name = "John";
$person->age = 20;
$person->address = "Jakarta";

echo $person->name . PHP_EOL;
echo $person->age . PHP_EOL;
echo $person->address . PHP_EOL;
echo $person->country . PHP_EOL;