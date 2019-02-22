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

	protected function query($table, $type, $column = null, $value = null) {
		if (is_null($column)) {
			$query = $this->dbh->prepare("SELECT * FROM {$table}");
		} else {
			$query = $this->dbh->prepare("SELECT * FROM {$table} WHERE {$column} = :val");
			$query->bindParam(':val', $value);
		}
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, $type);
	}

	protected function querySingle($table, $type, $column = null, $value = null) {
		$res = $this->query($table, $type, $column, $value);
		return array_shift($res);
	}
}
