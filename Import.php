<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APP_VER;

$conflict = new Conflict();
$conflict2 = new \Data\Two\Conflict();

helpMe("JOPRAS");

echo APP_VER;
