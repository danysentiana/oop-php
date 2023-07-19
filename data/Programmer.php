<?php

namespace Programmer;

class Programmer
{
    var string $name;
    var int $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class BackEnd extends Programmer{}

class FrontEnd extends Programmer{}

class Company
{
    // public string $name;
    public Programmer $programmer;

    // public function __construct($name, $programmer)
    // {
    //     $this->name = $name;
    //     $this->programmer = $programmer;
    // }

    // public function info()
    // {
    //     echo "Company Name: {$this->name}, Name: {$this->programmer->name}, Age: {$this->programmer->age}";
    // }
}

function greet(Programmer $programmer)
{
    echo "Programmer: $programmer->name, Age: $programmer->age" . PHP_EOL;
}