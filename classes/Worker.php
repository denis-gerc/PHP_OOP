<?php

class Worker
{
	public $age;
	public $name;
	public $salary;
	public $min_age = 18;
	public $max_age = 70;
	public $range_age = ['min_age' => 18, 'max_age' => 70];

	public function __construct($age, $name, $salary)
	{
		$this->age = $age;
		$this->name = $name;
		$this->salary = $salary;
		echo $this->checkAge5() . $this->name . '<hr>';
	}

	//Вариант 1
	public function checkAge()
	{
		if ($this->age <= $this->max_age & $this->age >= $this->min_age) {
			$validAge = 'Валидный возраст ';
		} else {
			$validAge = 'Не валидный возраст ';
		}

		return $validAge;
	}

	// Вариант 2
	public function checkAge2()
	{
		$validAge = $this->age >= $this->min_age & $this->age <= $this->max_age ? 'Валидный возраст ' : 'Не валидный возраст ';
		return $validAge;
	}

	// Вариант 3
	public function checkAge3()
	{
		$rangeAge = range($this->min_age, $this->max_age);
		foreach ($rangeAge as $key) {
			if ($this->age === $key) return 'Валидный возраст ';
		};
		return 'Не валидный возраст ';
	}

	// Вариант 4
	public function checkAge4()
	{
		$rangeAge = array_flip(range($this->min_age, $this->max_age));
		$validAge = array_key_exists($this->age, $rangeAge) ? 'Валидный возраст ' : 'Не валидный возраст ';
		return $validAge;
	}

	// Вариант 5
	public function checkAge5()
	{
		foreach ($this->range_age as $key) {
			if ($this->age === $key) return 'Валидный возраст ';
		};
		return 'Не валидный возраст ';
	}
}
