<?php

class Person
{
    var string $name = "Doe";
    var ?int $age;
    var string $address;
    var string $country = "Indonesia";

    function sayHello(?string $names)
    {
        if(is_null($names)){
            echo "Hello my name is $this->names";
        } else {
            echo "Hello $this->names";
        }
    }
}

