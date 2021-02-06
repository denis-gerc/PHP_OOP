<?php
error_reporting(-1);

use classes\Workers;


//require_once 'classes/User.php';
//require_once 'classes/Workers.php';
//require_once 'classes/interfaces/Interface.php';

function debug($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

// autoloader for classes
function autoloaderClasses($class_name)
{
	$class_name = str_replace("\\", "/", $class_name);
	$fail = __DIR__ . "/{$class_name}.php";
	if (file_exists($fail)) {
		require_once $fail;
	}
}

// autoloader for interfaces
//function autoloaderInterfaces($class_name)
//{
//	$fail = __DIR__ . "/{$class_name}.php";
//	if (file_exists($fail)) {
//		require_once $fail;
//	}
//}

spl_autoload_register('autoloaderClasses');
//spl_autoload_register('autoloaderInterfaces');

$obj1 = new Workers('Иван', 25, 1000);
$obj2 = new Workers('Вася', 26, 2000);

$obj1->setSalary(1500);

$sumSalary = $obj1->getSalary() + $obj2->getSalary();

echo "Сумма зарплат: {$sumSalary}";

echo "<br>" . $obj1->getText('Привет я наследую абстрактный метод');

echo $obj1->test();







