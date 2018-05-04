<?php
/**
* Work with DB MySQL
*/
class database
{
	var $mysqli;
	function __construct()
	{
		include 'config.php';
		$this->mysqli = new mysqli($db['host'], $db['user'], $db['password'], $db['database']);
		if($this->mysqli->connect_errno)
		{
			die("Не удалось подключиться к MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error);
		}
	}

	public function query($value)
	{
		return $this->mysqli->query($value);
	}

	public function sql_inq($query, $bind_param, $param)
	{
		$stmt = $this->mysqli->prepare($query);
		$stmt->bind_param($bind_param, $param);
		$stmt->execute();
	}
}