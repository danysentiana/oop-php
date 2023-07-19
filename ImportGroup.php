<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\{One\Conflict as Conflict1, One\Sample as Sample, Two\Conflict as Conflict2};
use const Helper\{APP_VER as VER, APP_NAME as NAME};

$conflict1 = new Conflict1;
$conflict1->conflict();
$sample = new Sample;
$sample->sample();
$conflict2 = new Conflict2;

echo VER;
echo NAME;