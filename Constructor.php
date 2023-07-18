<?php

require_once "data/Person.php";

$obj = new Person("Joe", "BFG");
var_dump($obj);
echo $obj->name . PHP_EOL;
echo $obj->address . PHP_EOL;
$obj->sayHello("andy");
$obj->info();