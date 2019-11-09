<?php

require "../vendor/autoload.php";

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello;
$hello->talk();

$helloWorld = new SayHello;
echo $helloWorld->world();
