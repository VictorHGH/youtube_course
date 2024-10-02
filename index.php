<?php

declare(strict_types=1);
date_default_timezone_set('America/Mexico_City');

// *********
// Funciones
// *********

// Algunas funciones definidas por PHP
echo "Marca de tiempo: " . time() . " " . date('Y-m-d H:i:s') . "<br>";
echo "Raiz cuadrada de 9: " . sqrt(9) . "<br>";
echo "Numero aleatorio entre 90 y 100: " . rand(1, 100) . "<br>";
echo "Numero pi: " . pi() . "<br>";

// Definir nuevas fuciones
function factorial(int $n) {
	$resultado = 1;

	for ($i = 1; $i <= $n; $i++) {
		$resultado *= $i;
	}

	return $resultado;
}

$n = 10;
$resultado = factorial($n);
echo "Factorial de $n es: $resultado.<br>";

// Valores por defecto en parametros
function valoracion(string $nombre, int $rating = 5) {
	echo "El $nombre tiene una valoracion de $rating.<br>";
}

valoracion("Curso PHP 8 desde 8", 10);

// No se sabe el numero de parametros
function concatenar(...$palabras) {
	$resultado = "";

	foreach ($palabras as $palabra) {
		$resultado .= $palabra . " ";
	}

	echo $resultado . "<br>";
}

concatenar("Victor", "Hugo", "Pedro", "Juan", "Carlos", "Luis", "Fernando", "Daniel", "Alberto", "Jose");

// funciones con tipo definido
// int, float, string, bool, array, object, null
function sumrEnteros(int $entero1, int $entero2): int | float {
	return $entero1 + $entero2;
}

$resultado = sumrEnteros(34355324, 34231231);
echo "El resultado de la suma es: $resultado<br>";

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
