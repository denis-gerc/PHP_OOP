<?php

namespace app;

use core\interfaces\Iinterface;
use core\traits\TColor;

class Workers extends User implements Iinterface
{
	use TColor;

	private $salary;
	private $text;
	public $action1;
	public $action2;

	public function __construct($name, $age, $salary)
	{
		parent::__construct($name, $age);
		$this->salary = $salary;
//		var_dump(self::class);
	}

	public function __toString()
	{
		return '<br>hello';

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

	public function doAction1()
	{
		echo $this->action1 = "<p>Выполнили действие 1</p>";
		return $this;
	}

	public function doAction2()
	{
		echo $this->action1 = "<p>Выполнили действие 2</p>";
		return $this;
	}

	public function __get($name)
	{
		// TODO: Implement __get() method.
		debug($name);
	}

	public function __set($name, $value)
	{
		// TODO: Implement __set() method.
		debug($name, $value);
	}


}
