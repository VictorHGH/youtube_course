<?php

declare(strict_types=1);

require_once 'clases/personas.php';

$persona1 = new Persona('VicTor HUGO', 'Arana', 25);

/* $persona1->setNombre('Victor hugO');
$persona1->apellido = 'González';
$persona1->edad = 25; */


$persona2 = new Persona('Pamela', 'Montes', 27);

/* $persona2->setNombre('Pamela');
$persona2->apellido = 'Montes';
$persona2->edad = 27; */

echo "El nombre de la persona 1 es: " . $persona1->getNombre();
echo "<br>";
echo "El nombre de la persona 2 es: " . $persona2->getNombre();
