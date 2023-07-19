<?php

class Product
{
    protected $name;
    protected $price;
    protected string $slug;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    private function getDesc(): string
    {
        return "Product Name: {$this->name} , Price: {$this->price}";
    }

    public function sayDesc(): string
    {
        return $this->getDesc();
    }
}

class ProductDummy extends Product
{
    public function info()
    {
        return "Info from $this->name, $this->price";
    }
}