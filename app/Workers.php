<?php

namespace app;
use core\interfaces\Iinterface;
use core\traits\TColor;

class Workers extends User implements Iinterface
{
	use TColor;
	private $salary;
	private $text;

	public function __construct($name, $age, $salary)
	{
		parent::__construct($name, $age);
		$this->salary = $salary;
//		var_dump(self::class);
	}

	public function getSalary(): int
	{
		return $this->salary;
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}

	// parent abstract class User
	public function getText($text)
	{
		return $this->text = $text;

	}

	// parent interfaces
	public function test()
	{
		return self::TEST2;
	}
}
