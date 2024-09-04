<?php

declare(strict_types=1);

// Condicionales
// if, else, elseif, switch, ternario, match 

// if
echo "if";
echo "<br>";
$edad = 18;
if ($edad >= 18) {
	echo 'Eres mayor de edad';
} else {
	echo 'Eres menor de edad';
}

echo "<br>";
echo "elseif";
echo "<br>";

// elseif
$hora = 20;
if ($hora < 12) {
	echo 'Buenos días';
} elseif ($hora < 20) {
	echo 'Buenas tardes';
} else {
	echo 'Buenas noches';
}

echo "<br>";
echo "switch";
echo "<br>";

// switch
$dia = 3;
switch ($dia) {
	case 1:
		echo 'Lunes';
		break;
	case 2:
		echo 'Martes';
		break;
	case 3:
		echo 'Miércoles';
		break;
	case 4:
		echo 'Jueves';
		break;
	case 5:
		echo 'Viernes';
		break;
	case 6:
		echo 'Sábado';
		break;
	case 7:
		echo 'Domingo';
		break;
	default:
		echo 'No es un día de la semana';
		break;
}

echo "<br>";
echo "ternario";
echo "<br>";

// ternaario
$edad = 18;
$mensaje = $edad >= 18 ? 'Eres mayor de edad' : 'Eres menor de edad';
echo $mensaje;

echo "<br>";
echo "match";
echo "<br>";

// match
$dia = 5;
$dia = match ($dia) {
	1 => 'Lunes',
	2 => 'Martes',
	3 => 'Miércoles',
	4 => 'Jueves',
	5 => 'Viernes',
	6 => 'Sábado',
	7 => 'Domingo',
	default => 'No es un día de la semana',
};
echo $dia;

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
