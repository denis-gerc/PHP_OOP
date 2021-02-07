<?php


namespace app;

use core\traits\Tsingleton;
use PDO;

class Db
{
	use Tsingleton;

	protected $link;
	private $dsn, $username, $password;

	public function sqlDb($dsn, $username, $password)
	{
		$this->dsn = $dsn; // mysqli:host=localhost;dbname=named
		$this->username = $username; // root
		$this->password = $password; // root
//		$this->connectDb();
	}

	public function connectDb()
	{
		$this->link = new PDO($this->dsn, $this->username, $this->password);
	}

	public function __sleep()
	{
		return array('dsn', 'username', 'password');
	}

	public function __wakeup()
	{
		$this->connectDb();
	}

	//	Добавление записи, изменение записи, удаление записи
	public function sqlQuery($query, $params)
	{
		$stmt = $this->link->prepare($query);
		return $stmt->execute($params);
	}

	//	Выборка из БД - SELECT
	public function sqlSelect($query, $params)
	{
		$stmt = $this->link->prepare($query);
		$stmt->execute($params);
		return $result = $stmt->fetch();
	}

}