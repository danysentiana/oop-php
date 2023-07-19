<?php

namespace Helper;

const APP_VER = "5.5.5.5.5";
const APP_NAME = "Helper";

function helpMe(?string $name){
    if($name == null){
        echo "Hello World" . PHP_EOL;
    } else {
        echo "Test $name" . PHP_EOL;
    }
}

