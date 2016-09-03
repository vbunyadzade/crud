<?php
class Database {

	public $host;
	public $username;
	public $pass;
	public $dbname;
	public $conn;

	function __construct($host, $user, $pass, $db) {
		$this->host     = $host;
		$this->username = $user;
		$this->pass     = $pass;
		$this->dbname   = $db;

		$this->conn = mysqli_connect($this->host, $this->username, $this->pass, $this->dbname);

	}
	public function select($tname, $id = null) {
		$sql = "SELECT * FROM $tname ";
		if ($id != null) {
			$sql .= " WHERE id=$id";
		}
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}

	public function insert($tname, $column, $value) {
		$sql1   = "INSERT INTO $tname($column) VALUES ($value)";
		$query1 = mysqli_query($this->conn, $sql1);
		return $query1;
	}
	public function update($tname, $column, $id) {
		$sql2   = "UPDATE $tname SET $column WHERE id=$id";
		$query2 = mysqli_query($this->conn, $sql2);
		return $query2;
	}
	public function delete($tname, $id) {
		$sql3   = "DELETE FROM $tname WHERE id=$id";
		$query3 = mysqli_query($this->conn, $sql3);
		return $query3;
	}
}

$connect = new Database("localhost", "root", "", "task");

?>