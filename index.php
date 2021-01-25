<?php
error_reporting(-1);
require_once 'classes/Worker.php';

function debug($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

$obj1 = new Worker();
$obj1->name = 'Иван';
$obj1->age = 18;
$obj1->salary = 1000;

$obj2 = new Worker();
$obj2->name = 'Вася';
$obj2->age = 71;
$obj2->salary = 2000;

echo $obj1->checkAge4($obj1->age);
echo '<hr>';
echo $obj2->checkAge4($obj2->age);
