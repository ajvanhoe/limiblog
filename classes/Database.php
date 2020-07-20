<?php

class Database {
	private static $connection = null;

	private $source = "mysql:host=localhost;dbname=prodavnica;charset=utf8",
			$user = "root",
			$pass = "",

			$pdo,
			$query,
			$results,
			$error = false,
			$count = 0;

	// private konstruktor - singleton pattern
	private function __construct() {
		try 
		{
			$this->pdo = new PDO($this->source, $this->user, $this->pass);
		} 
		catch (PDOException $e) 
		{
			die( $e->getMessage() );
		}
	}

	// konekcija sa bazom
	public static function connect() {
		if(!isset(self::$connection)) {
			self::$connection = new Database();
		}
		return self::$connection;
	}

	// opsti metod za sve upite
	public function query($sql, $params = []) {

		$this->error = false;
		$this->count = 0;
		$this->query = $this->pdo->prepare($sql);

		if($this->query) { // pocetak upita
			if(count($params)) { // bindovanje parametara
				$x = 1;
				foreach ($params as $param) {
					$this->query->bindValue($x, $param); //menja ? sa vredostima
					$x++;
				}
			}

			if($this->query->execute()) { // izvrsavanje upita
				$this->results = $this->query->fetchAll(PDO::FETCH_OBJ);
				$this->count = $this->query->rowcount();
			} else {
				$this->error = true;
			}
		}

		return $this;

	}



	// 	CRUD

	// create
	public function insert($table, $fields = []) {
		$values = ''; 
		$x = 1;

		foreach($fields as $field) {
			$values .= '?';
			if ($x < count($fields)) {
				$values .=  ', '; 
			}
			$x++;
		}

		$sql = "INSERT INTO {$table} VALUES ({$values})";
		$this->query($sql, $fields);
		if(!$this->error) {
			return true;
		}
		return false;
	}
	
	// read
	public function find($table, $field, $value) {
		$sql = "SELECT * FROM {$table} WHERE {$field} = ?";
		$this->query($sql, [$value]);
		if(!$this->error) {
			return $this;
		}
		return null;
	}


	// update
	public function update($table, $id, $fields = []) {
		$set = '';
		$x = 1;

		foreach($fields as $field => $value) {
			$set .= "{$field} = ?";
			if($x < count($fields)) {
				$set .= ', ';
			}
			$x++;
		}

		$sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";
		$this->query($sql, $fields);
		if($this->count()) {
			return true;
		}
		return false;
			
	}



	// delete
	public function delete($table, $id) {
		$sql = "DELETE FROM {$table} WHERE id = ?";
		$this->query($sql, [$id]);
		if($this->count()) {
			return true;
		}
		return false;
	}

	// ostali pomocni metodi za vracanje rezultata
	public function results() {
		return $this->results;
	}

	public function first() {
		if(!empty($this->results)) {
			return $this->results()[0];
		}
		return null;
	}


	public function count() {
		return $this->count;
	}

	public function error() {
		return $this->error;
	}


}


