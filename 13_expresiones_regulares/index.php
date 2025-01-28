<?php

$cadena = "Holaaaaaaaa";

$expresion = "/hola*/i";

echo "<h1>Expresiones regulares</h1>";

if (preg_match($expresion, $cadena)) {
	echo "La cadena contiene la expresion";
} else {
	echo "La cadena NO contiene la expresion";
}

echo "<h2>Expresiones regulares con patrones</h2>";

$url = "https://youtu.be/xGaXH7spCyA?si=kNgCYsi6OREU050y";

$patron = "%^(?:https://)?(?:www\.)?(?:youtu\.be/|youtube\.com/watch\?v=)(\w{10,12})%i";

if (preg_match($patron, $url, $matches)) {
	echo "La url es valida";
} else {
	echo "La url NO es valida";
}

echo "<br>";
echo "<br>";

echo "El id es: " . $matches[1];
