<?php

namespace animal;

class Animal
{
    var string $name;
    var int $age;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        return "Hello, I'm $this->name";
    }
}

class Dog extends Animal
{
    public function greet()
    {
        return "Woof, I'm a Dog and my name is $this->name";
    }

    // Call greet func from parent (class Animal)
    public function parentGreet()
    {
        return parent::greet();
    }
}