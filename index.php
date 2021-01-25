<?php

require_once 'classes/Worker.php';

function debug($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

$obj1 = new Worker();
$obj1->name = 'Иван';
$obj1->age = 25;
$obj1->salary = 1000;

$obj2 = new Worker();
$obj2->name = 'Вася';
$obj2->age = 26;
$obj2->salary = 2000;

$sumSalary = $obj1->salary + $obj2->salary;
echo 'Сумма зарплат.' . $sumSalary;
echo '<hr>';
$sumAge = $obj1->age + $obj2->age;
echo 'Сумма возрастов.' . $sumAge;
