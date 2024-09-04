<?php

declare(strict_types=1);

// Operadores de comparación
// == igual, === identico, != diferente, <> diferente, !== no identico, < menor que, > mayor que, <= menor o igual que, >= mayor o igual que
$a = 1;
$b = 1;

var_dump($a === $b); // false
var_dump($a !== $b); // true
var_dump($a < $b); // false
var_dump($a > $b); // false
var_dump($a <= $b); // true
var_dump($a >= $b); // true

// Operadores logicos
// and, &&, or, ||, xor, !, and, or
$numero = 10;
$minimo = 0;
$maximo = 100;

if ($numero >= $minimo && $numero <= $maximo) {
	echo "Dentro del rango";
} else {
	echo "Fuera del rango";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>


</body>

</html>
