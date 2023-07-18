<?php

require_once "data/Person.php";

define("APP_VERSION", "5.5.5");
const APP_NAME = "PHP OOP";

// echo APP_VERSION  . PHP_EOL;
// echo APP_NAME . PHP_EOL;

// invoke const from class :: 
// echo Person::AUTHOR;
$var = new Person("Santos", "Rio");

$var->info();