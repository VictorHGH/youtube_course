<?php

declare(strict_types=1);

class MyClass
{
	public $public = "public";
	protected $protected = "protected";
	private $private = "private";

	public function printHello()
	{
		echo $this->public . "<br>";
		echo $this->protected . "<br>";
		echo $this->private . "<br>";
	}
}

class MyClass2 extends MyClass
{
	public $public = "public 2";
	protected $protected = "protected 2";

	public function printHello()
	{
		echo $this->public . "<br>";
		echo $this->protected . "<br>";
	}
}
