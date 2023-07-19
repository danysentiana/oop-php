<?php

require_once "data/Programmer.php";

use Programmer\{Programmer, BackEnd, FrontEnd, Company};

use function Programmer\greet;

// $programmer = new Programmer("Joe", 22);
// $comp = new Company("Nestle", $programmer);
// $comp->info();

$company = new Company();
// $company->programmer = new Programmer("Joe", 20);
// var_dump($company);
// $company->programmer = new BackEnd("Ken", 24);
// var_dump($company);
// $company->programmer = new FrontEnd("Ash", 21);
// var_dump($company);

greet(new Programmer("Joe", 20));
greet(new FrontEnd("Joe", 20));
greet(new BackEnd("Joe", 20));