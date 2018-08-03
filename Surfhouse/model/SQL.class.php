<?php
include_once "config/db.php";

class SQL
{
	private static $instance;
	private $connect;	
	
	function __construct() {
		setlocale(LC_ALL,'RU_ru.utf-8');
		$this->connect = new PDO(DB_SERVER.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		$this->connect->exec('SET NAMES UTF8');
		$this->connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}

	private function __sleep() {}
	
	private function __wakeup() {}
		
	private function __clone() {}
    
	public static function getInstance() {
		if (self::$instance == null)	
			self::$instance = new self;
		return self::$instance;
	}
	
	public function Select($query) {
		$q = $this->connect->prepare($query);
		$q->execute();
		
		if ($q->errorCode() != PDO::ERR_NONE) {
			$info = $q->errorInfo();
			die($info[2]);
		}
			
		return $q->fetchAll();
	}

	public function Insert($table, $object) {
		$columns = array();
		
		foreach ($object as $key => $value) {
			$columns[] = $key;
			$masks[] = ":$key";
			if ($value === null)
				$object[$key] = 'NULL';
		}
		
		$columns_s = implode(',', $columns);
		$masks_s = implode(',', $masks);
		
		$query = "INSERT INTO $table ($columns_s) VALUES ($masks_s)";
		
		$q = $this->connect->prepare($query);
		$q->execute($object);
		
		if ($q->errorCode() != PDO::ERR_NONE) {
			$info = $q->errorInfo();
			die($info[2]);
		}
		
		return $this->connect->lastInsertId();		
	}
	
	public function Update($table,$object,$where) {
		$sets = array();
		 
		foreach ($object as $key => $value) {
			$sets[] = "$key=:$key";
			if ($value === NULL)
				$object[$key] = 'NULL';
		}
		 
		$sets_s = implode(',',$sets);
		$query = "UPDATE $table SET $sets_s WHERE $where";

		$q = $this->connect->prepare($query);
		$q->execute($object);

		if ($q->errorCode() != PDO::ERR_NONE) {
			$info = $q->errorInfo();
			die($info[2]);
		}
		
		return $q->rowCount();
	}
		
	public function Delete($table, $where) {
		$query = "DELETE FROM $table WHERE $where";
		$q = $this->connect->prepare($query);
		$q->execute();
		
		if ($q->errorCode() != PDO::ERR_NONE) {
			$info = $q->errorInfo();
			die($info[2]);
		}
		
		return $q->rowCount();
	}
}
