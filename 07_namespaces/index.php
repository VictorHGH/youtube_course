<?php

use carpeta1\Humano;
use carpeta2\Humano as Humano2;

require_once 'carpeta1/humano.php';
require_once 'carpeta2/humano.php';

$humano1 = new Humano;
$humano1->saludar();

echo "<br>";

$humano2 = new Humano2;
$humano2->saludar();
