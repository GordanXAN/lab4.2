<?php

require_once __DIR__ . './vendor/autoload.php';

use Gordanetto\WeblabLib\creditinterest\simpleinterest;
use Gordanetto\WeblabLib\creditinterest\сompoundinterest;

$simple = new simpleinterest();
$compound = new сompoundinterest();

try {
   echo 'Simple :' . $simple->indebtedness(50000,25, 3);
   echo "\nCompound :" . $compound->indebtedness(1000000,10, 7);
}catch (\Sukhanov\WeblabLib\excepcions\custexcept $exp){
    echo $exp;
}