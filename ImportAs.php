<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;

use function Helper\helpMe as help;
use const Helper\APP_VER as APP_VER;

$conflict1 = new Conflict1;
$conglict2 = new Conflict2;

help("Dodo");

echo APP_VER;