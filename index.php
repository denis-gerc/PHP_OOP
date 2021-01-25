<?php
error_reporting(-1);
require_once 'classes/Worker.php';

function debug($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

$obj1 = new Worker(17, 'Иван', 1000);

$obj2 = new Worker(71, 'Вася', 2000);


echo $obj1->checkAge4($obj1->age) . $obj1->name;
echo '<hr>';
echo $obj2->checkAge4($obj2->age) . $obj2->name;
