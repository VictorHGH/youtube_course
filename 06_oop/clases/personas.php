<?php

declare(strict_types=1);

class Persona
{
	public function __construct(
		private string $nombre,
		public string $apellido,
		public int $edad,
	) {
		$this->nombre = strtolower($nombre);
		$this->apellido = strtolower($apellido);
	}

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
}
