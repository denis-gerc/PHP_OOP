<?php

class Worker
{
	public $age;
	public $name;
	public $salary;

	public function __construct($age, $name, $salary)
	{
		$this->age = $age;
		$this->name = $name;
		$this->salary = $salary;
	}

	//Вариант 1
	public function checkAge()
	{
		if ($this->age <= 70 & $this->age >= 18) {
			$valid = 'Валидный возраст ' . $this->age;
		} else {
			$valid = 'Не валидный возраст ' . $this->age;
		}

		return $valid;
	}

	// Вариант 2
	public function checkAge2()
	{
		$valid = $this->age >= 17 & $this->age <= 70 ? 'Валидный возраст ' : 'Не валидный возраст ';
		return $valid;
	}

	// Вариант 3
	public function checkAge3($var)
	{
		$minmaxAge = range(18, 70);
		foreach ($minmaxAge as $key) {
			if ($var === $key) return 'Валидный возраст ';
		};
		return 'Не валидный возраст ';
	}

	// Вариант 4
	public function checkAge4($var)
	{
		$valueToKey = array_flip(range(18, 70));
		return array_key_exists($var, $valueToKey) ? 'Валидный возраст ' : 'Не валидный возраст ';
	}
}
