<?php

declare(strict_types=1);

class Persona
{
	public string $nombre, $apellido1, $apellido2;
	private string $apellidos;
	public int $edad;

	public function setNombre(string $nombre): string
	{
		$this->nombre = strtolower($nombre);

		return $this->nombre;
	}

	public function getNombre(): string
	{
		$this->nombre = ucwords($this->nombre);

		return $this->nombre;
	}

	public function setApellidos(string $apellido1, string $apellido2)
	{
		$this->apellido1 = strtolower($apellido1);
		$this->apellido2 = strtolower($apellido2);
	}

	public function getApellidos(): string
	{
		$this->apellido1 = ucwords($this->apellido1);
		$this->apellido2 = ucwords($this->apellido2);
		$this->apellidos = $this->apellido1 . ' ' . $this->apellido2;

		return $this->apellidos;
	}
}

class Peruano extends Persona
{
	public string $departamento, $ciudad;
}

class Chileno extends Persona
{
	public string $comuna, $region;

	public function setApellidos(string $apellido1, string $apellido2)
	{
		$this->apellido1 = strtolower($apellido2);
		$this->apellido2 = strtolower($apellido1);
	}
}
