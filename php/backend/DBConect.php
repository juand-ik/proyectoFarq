<?php

class DBConect
{
	protected static $connection;

	public function connect()
	{
		if(!isset(self::$connection))
		{
			self::$connection = new mysqli("localhost","root","passDB","basedeDatos");
		}
		if(self::$connection === false)
		{
			return false;
		}
		return self::$connection;
	}

	public function getLastId()
	{
		return $this->connect()->insert_id;
	}
	public function query($query)
	{
		$connection = $this->connect();
		$result = $connection->query($query);

		return $result;
	}
	public function beginTransaction($query)
	{
		$connection = $this->connect();
		$connection->query("SET autocommit=0;");
		$result = $connection->query("BEGIN;");

        return $result;
    }

	public function stopTransaction($result)
	{
		$connection = $this->connect();
		if ($result === false)
		{
			$connection->query("ROLLBACK;");
		}
		else
		{
			$connection->query("COMMIT;");
		}

	}

	public function select($query)
	{
		$rows = array();
		$result = $this->query($query);
		if($result === false)
		{
			return false;
		}
		while($row = $result->fetch_assoc())
		{
			$rows[] = $row;
		}
		return $rows;
	}
	public function error()
	{
		$connection = $this->connect();
		return $connection->error;
	}
}

?>
