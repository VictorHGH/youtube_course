<?php

declare(strict_types=1);

interface a
{
	public function prueba1();
}

interface b extends a
{
	public function prueba2();
}

interface c extends a, b
{
	public function prueba3();
}

class d implements c
{
	public function prueba1()
	{
		echo "prueba1<br>";
	}

	public function prueba2()
	{
		echo "prueba2<br>";
	}

	public function prueba3()
	{
		echo "prueba3<br>";
	}
}
