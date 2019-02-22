<?php

namespace App\Controllers;

use \PDO;

class BaseController {
	protected $dbh;

	public function __construct($dbh) {
		// connect to db via PDO
		// and get db handle
		$this->dbh = $dbh;
	}

	protected function queryWhere($table, $type, $column, $value) {
		$query = $this->dbh->prepare("SELECT * FROM {$table} WHERE {$column} = :val");
		$query->bindParam(':val', $value);
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, $type);
	}

	protected function queryAll($table, $type) {
		$query = $this->dbh->prepare("SELECT * FROM {$table}");
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, $type);
	}
}
