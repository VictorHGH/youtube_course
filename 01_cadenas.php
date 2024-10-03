<?php

declare(strict_types=1);
date_default_timezone_set('America/Mexico_City');

// *********
// Cadena de caracteres
// *********

$cadena = "aéioiu";

echo "La cadena a comprobar es: $cadena<br>";

// Devulve el numero de bits de la cadena, no el numero de caracteres
echo "1. El número de bits de la cadena es " . strlen($cadena) . "<br>";

// Devulve el numero de caracteres
echo "2. El número de caracteres de la cadena es " . mb_strlen($cadena) . "<br>";

// Devuelve la posicion de la primera aparicion de un caracter
echo "3. La primera aparicion de 'é' es " . strpos($cadena, "é") . "<br>";

// Devuelve la posicion de la ultima aparicion de un caracter
echo "4. La ultima aparicion de 'u' es " . strrpos($cadena, "u") . "<br>";

// Devuelve la posicion de la primera aparicion de un caracter, ignorando mayusculas y minusculas
echo "5. La primera aparicion de 'A' ignorando mayusculas y minusculas es " . stripos($cadena, "a") . "<br>";

// Comprueba si la cadena contiene un caracter
echo str_contains($cadena, "éiu") ?
	"6. La cadena contiene 'éiu': Si<br>" :
	"6. La cadena no contiene 'éiu': No" . "<br>";

// Comprueba si la cadena contiene un caracter
echo str_contains($cadena, "éio") ?
	"7. La cadena contiene 'éiu': Si<br>" :
	"7. La cadena no contiene 'éiu': No" . "<br>";

// Comprueba si la cadena empieza por un caracter
echo str_starts_with($cadena, "a") ?
	"8. La cadena empieza con 'a': Sí<br>" :
	"8. La cadena empieza con 'a': No <br>";

// Comprueba si la cadena termina por un caracter
echo str_ends_with($cadena, "z") ?
	"9. La cadena termina con 'z': Sí<br>" :
	"9. La cadena termina con 'z': No <br>";

echo "<br>";
$cadena1 = "Hola mundo esto es una prueba";
$cadena2 = "Prueba";

echo "Nuevas cadenas: $cadena1 y $cadena2<br>";

echo "10. Comparando las cadenas unsando strcasecmp():<br>";
if (strcasecmp($cadena1, $cadena2) === 0) {
	echo "La cadenas son iguales<br>";
} else {
	echo "La cadenas son distintas<br>";
}

echo "11. Comparando las cadenas unsando strcmp():<br>";
if (strcasecmp($cadena1, $cadena2) === 0) {
	echo "La cadenas son iguales<br>";
} else {
	echo "La cadenas son distintas<br>";
}

echo "12. Eliminando los espacios en blanco:<br>";
echo trim($cadena1) . "<br>";

echo "13. Recortando una parte de la cadena:<br>";
echo substr($cadena1, 0, 9) . "<br>";

echo "14. remplazando una parte de la cadena:<br>";
echo str_replace("a", "cambiar", $cadena1) . "<br>";

echo "15. Cambiar todas las letras a mayusculas:<br>";
echo strtoupper($cadena1) . "<br>";

echo "16. Cambiar todas las letras a minusculas:<br>";
echo strtolower($cadena1) . "<br>";

echo '17. primera letra a mayuscula:<br>';
echo ucfirst($cadena1) . "<br>";

echo "18. primera letra de cada palabra a mayuscula:<br>";
echo ucwords($cadena1) . "<br>";

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
