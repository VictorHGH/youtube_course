<?php

declare(strict_types=1);

$data = [
	[
		'nombre' => 'Victor Arana Flores',
		'email' => 'victor@codersfree.com',
		'celular' => '+529988888888',
		'direccion' => [
			'pais' => 'Perú',
			'ciudad' => 'Lima',
			'calle' => 'Calle 123'
		]
	],

	[
		'nombre' => 'Pamela Arana Flores',
		'email' => 'pamela@codersfree.com',
		'celular' => '+529988888888'
	],

	[
		'nombre' => 'Joel Cordova',
		'email' => 'joel@codersfree.com',
		'celular' => '+529988888888'
	],
];

echo $data[0]['direccion']['pais'];

foreach ($data  as $item) {
	echo $item['nombre'] . "<br>";
	echo $item['email'] . "<br>";
	echo $item['celular'] . "<br>";
	echo '<hr>';
}
