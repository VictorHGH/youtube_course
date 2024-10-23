<?php

declare(strict_types=1);

require_once 'clases/personas.php';
require_once 'clases/visibility.php';


echo "<h2>Clase de clases</h2>";
/* $peruano = new Peruano;
$peruano->setNombre('Victor Hugo'); */

$peruano = new Peruano;

$peruano->setApellidos('González', 'Hernández');

echo $peruano->getApellidos();

/* var_dump($chileno); */

echo "<h2>Clase de visibilidad</h2>";

$obj = new MyClass();

$obj2 = new MyClass2();

$obj2->printHello();
