<?php

class Hogar {
	public $color, $seguridad;
	final public function saludar() {
		echo "Hola desde la clase Hogar";
	}
}

class Departamento extends Hogar {
	// proivido sobreescritura de métodos
	
	/* public function saludar() {
		echo "Hola desde la clase Departamento";
	} */
}

$departamento = new Departamento;
$departamento->saludar();
