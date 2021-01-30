<?php
error_reporting(-1);

require_once 'classes/User.php';
require_once 'classes/Iinterface.php';
require_once 'classes/Workers.php';

function debug($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

$obj1 = new Workers('Иван', 25, 1000);
$obj2 = new Workers('Вася', 26, 2000);

$obj1->setSalary(1500);

$sumSalary = $obj1->getSalary() + $obj2->getSalary();
echo "Сумма зарплат: {$sumSalary}";

echo "<br>" . $obj1->getText('Привет я наследую абстрактный метод');

echo $obj1->test();







