<?php

class Humano {
	public static $nombre = "Victor Hugo";

	public static function saludar() {
		echo "Hola mundo";
	}

	public function saludoPersonalizado(){
		echo "Hola " . self::$nombre;
	}
}

class Peruano extends Humano {
	public function saludoPeruano() {
		echo "Hola desde Perú, " . parent::$nombre;
	}
}

/* $humano = new Humano;
$humano->saludoPersonalizado(); */

$peruano = new Peruano;
$peruano->saludoPeruano();
