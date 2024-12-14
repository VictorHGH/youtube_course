<?php

declare(strict_types=1);

require_once 'clases/personas.php';
require_once 'clases/visibility.php';
require_once 'clases/interfaces.php';
require_once 'clases/clase_abstracta.php';


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

echo "<h2>Clase de interfaces</h2>";

$template = new d();

$template->prueba3();

echo "<h2>Clase de clases abstractas</h2>";

$template = new MiClaseAbstracta();

$template->imprimir();
