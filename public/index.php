<?php

require __DIR__ . '/../vendor/autoload.php';

use \app\Wcs\Hello;

use \HelloWorld\SayHello;






$hello = new Hello;
echo $hello->talk();

$SayHello  =new SayHello;
echo $SayHello->world();


