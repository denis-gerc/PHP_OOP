<?php
error_reporting(-1);
require_once 'classes/User.php';
require_once 'classes/Worker.php';

function debug($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

$obj1 = new Worker('Иван', 25, 1000);
$obj2 = new Worker('Вася', 26, 2000);
$getSumSalary = $obj1->getSalary() + $obj2->getSalary();
echo "Сумма зарплат: {$getSumSalary}";
