<?php

namespace app;

abstract class User
{
	const TEST = 10;
	protected $name;
	protected $age;

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		return $this->age = $age;
	}

	abstract protected function getText($text);

}
