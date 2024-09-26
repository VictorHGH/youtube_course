<?php

declare(strict_types=1);

// Estructuras repetitivas 2
for ($i = 1; $i <= $exp; $i++) {
	$resultado = $resultado * $base;
}

$filas = 10;
$str = "";

for ($i = 1; $i <= $filas; $i++) {
	echo $str .= "*";
	echo "<br>";
}

echo "<br>";

$nombres = ["Victor", "Hugo", "Pedro", "Juan", "Carlos", "Luis", "Fernando", "Daniel", "Alberto", "Jose"];

function ast(int $len) {
	$str = "";

	for ($i = 1; $i <= $len; $i++) {
		$str .= "*";
	}

	echo $str;
	echo "<br>";
}

foreach ($nombres as $nombre) {

	$len = strlen($nombre);

	ast($len);
	echo $nombre . "<br>";
	ast($len);

	$len = 0;

	echo "<br>";
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

	<h1>Resultado: <?php echo $resultado; ?></h1>

</body>

</html>
