<?php

declare(strict_types=1);

$array = [1, 2, 3];

list($a, $b, $c) = $array;
echo $b;
echo "<br>";


$array = range(10, 20);
echo '<br>';

var_dump($array);
echo $array[5];
echo '<br>';

echo count($array);
echo '<br>';

$array = ['Victor', 'Pamela', 'Joel', 'Elizabeth'];

unset($array[3]);

if (in_array('Elizabeth', $array)) {
	echo "El valor buscado se encuentra en el array<br>";
} else {
	echo "El valor buscado NO se encuentra en el array<br>";
}
