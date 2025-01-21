<?php

declare(strict_types=1);

class Humano {

	public function __construct(
		public string $nombre,
		public string $apellido_materno,
		public string $apellido_paterno,
		public int $dni 
	) {}

	public function setNombre(string $nombre) : self {
		$this->nombre = $nombre;
		return $this;
	}

	public function setApellidos(string $apellido_materno, string $apellido_paterno) : self {
		$this->apellido_materno = $apellido_materno;
		$this->apellido_paterno = $apellido_paterno;
		return $this;
	}

	public function setDni(int $dni) : self {
		$this->dni = $dni;
		return $this;
	}

	public function imprimirDatos() {
		echo "Nombre: " . $this->nombre . "<br>";
		echo "Apellido materno: " . $this->apellido_materno . "<br>";
		echo "Apellido paterno: " . $this->apellido_paterno . "<br>";
		echo "DNI: " . $this->dni . "<br>";
	}
}

$humano = new Humano(nombre:"Victor Hugo", apellido_paterno:"González", apellido_materno:"Hernández", dni:123456789);
$humano->imprimirDatos();
