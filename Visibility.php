<?php

require_once "data/Product.php";

// $product = new Product("Buku", 10000);

// echo $product->sayDesc();
// $product->name = "Buku Tulis";
// $product->price = 23000;

// echo $product->getName() . PHP_EOL;

// echo $product->name . PHP_EOL;
// echo $product->name . PHP_EOL;

$dummy = new ProductDummy("Test", 2000);
// $dummy->name = "Test Product";
// $dummy->price = 23000;
echo $dummy->info();
