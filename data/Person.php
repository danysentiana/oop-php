<?php
class Person
{
    const AUTHOR = "Joseph";

    var string $name;
    var int $age;
    var ?string $address;
    var string $country = "Brazil";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $new_person)
    {
        if(is_null($new_person)){
            echo "I'm $this->name" . PHP_EOL;
        } else {
            echo "Hello $new_person, I'm $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Person $this->name destroyed" . PHP_EOL;    
    }
}

