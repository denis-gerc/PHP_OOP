<?php
error_reporting(-1);
require_once 'classes/Worker.php';

function debug($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

$obj1 = new Worker(71, 'Иван', 1000);
$obj2 = new Worker(17, 'Вася', 2000);
$obj2 = new Worker(18, 'Петя', 3000);
