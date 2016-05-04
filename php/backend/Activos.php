<?php

class Activos
{
	private $conn;
	private $table_name = "activos";

	public $id;
	public $nombre;


	public function __construct($db)
	{
		$this->conn = $db;
	}
	function create()
	{
	}
	function getAll()
	{
		$query = "SELECT * FROM".$this->table_name." WHERE estatus = 1 ORDER BY nombre";
		return ($this->conn->select($query)) ? ($this->conn->select($query)) : false; 
	}
	function getById($id)
	{
		$query = "SELECT * FROM " . $this->table_name . " WHERE id =".$id;
		return ($this->conn->select($query)) ? ($this->conn->select($query)) : false; 

	} 
	/*
	 * if ($haceFrio)
	 * {
	 *     $variable = "Hace frío";
	 * }
	 * else
	 * {
	 *     $variable = "No hace frío";
	 * }
	 *
	 * $variable = ($haceFrio) ? "Hace frío" : "No hace frío";
	 */
}

?>
