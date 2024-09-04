<?php

declare(strict_types=1);

const CURSO = "PHP 8 desde cero";

const ANIMALES = ["Perro", "Gato", "Pájaro"];
// Siguiente capítulo:
// https://www.youtube.com/watch?v=ulYkNaB7cAQ&list=PLZ2ovOgdI-kUSqWuyoGJMZL6xldXw6hIg&index=6

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<p><?= CURSO ?></p>
	<p><?= ANIMALES[0] ?></p>
	<p><?= PHP_VERSION ?></p>
	<p><?= PHP_OS ?></p>
	<p><?= PHP_EXTENSION_DIR ?></p>
	<p><?= PHP_SAPI ?></p>
	<p><?= __LINE__ ?></p>
	<p><?= __FILE__ ?></p>

</body>

</html>
