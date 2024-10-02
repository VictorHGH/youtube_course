<?php

declare(strict_types=1);

// Brake and Continue

for ($i = 1; $i <= 20; $i++) {
	if ($i == 18) {
		echo "<br>";
		break;
	}

	if ($i == 7 or $i == 15) {
		echo "<br>";
		continue;
	}

	echo $i . "<br>";
}

echo "Saliste del bucle";


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
