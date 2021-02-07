<?php
error_reporting(-1);

use app\Workers;
require_once __DIR__ . '/vendor/autoload.php';

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
echo $obj1;
echo $obj1->test123 = "hello";

$mail = new \PHPMailer\PHPMailer\PHPMailer();

debug($obj1);










