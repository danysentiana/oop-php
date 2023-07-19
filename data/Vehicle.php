<?php

class Vehicle
{
    var $brand;
    // var $year;

    function sayHello(string $name): void
    {
        echo "$name have $this->brand" . PHP_EOL;
    }
}

class Motor extends Vehicle
{

}
