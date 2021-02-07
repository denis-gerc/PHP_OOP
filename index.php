<?php
error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';

function debug($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

$Db = \app\Db::getInstance();

$Db->sqlDb('mysql:host=localhost;dbname=php_oop', 'root', 'root');

$Db->connectDb();

// Выборка SELECT : array()
$query = "SELECT `name` FROM messages WHERE `id_message` = ?";
$params = [2];
debug($Db->sqlSelect($query, $params));

// Обновление Update : bool
$name = 'DenisGerc';
$id=3;

$query = "UPDATE `messages` SET `name` = :name WHERE `id_message` = :id";

$params = [
	':id' => $id,
	':name' => $name
];

debug($Db->sqlQuery($query, $params));

$Db1 = \app\Db::getInstance();

// Один и тот же объект $Db b $Db1
debug($Db);
debug($Db1);











