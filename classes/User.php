<?php

class User
{
	protected $name;
	protected $age;

//	public function __construct($name, $age)
//	{
//		$this->setName($name);
//		$this->setAge($age);
//	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getAge(): int
	{
		return $this->age;
	}

	public function setAge(int $age)
	{
		$this->age = $age;
	}
}
