<?php

declare(strict_types=1);

abstract class ClaseAbstracta
{
	abstract protected function getValor();
	abstract protected function valorPrefijo($prefijo);

	public function imprimir()
	{
		echo $this->getValor();
	}
}

class MiClaseAbstracta extends ClaseAbstracta
{
	protected function getValor()
	{
		return 'Hola desde una clase abstracta';
	}

	protected function valorPrefijo($prefijo)
	{
		return $prefijo . $this->getValor();
	}
}
