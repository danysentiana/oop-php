<?php

require_once "data/Person.php";

// $person = new Person;
// $person->name = "John Doe";

// $person->sayHello("Joe");
// $person->sayHello(null);

$obj = new Person("Santos", "Rio");
$obj->name = "Joe";

echo $obj->name . PHP_EOL;
echo $obj->address;

