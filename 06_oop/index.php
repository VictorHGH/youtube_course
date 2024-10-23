<?php

declare(strict_types=1);

require_once 'clases/personas.php';

/* $peruano = new Peruano;
$peruano->setNombre('Victor Hugo'); */

$chileno = new Chileno();

$chileno->setApellidos('González', 'Hernández');

$chileno->getApellidos();

var_dump($chileno);
