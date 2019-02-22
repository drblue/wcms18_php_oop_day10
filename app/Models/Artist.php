<?php

namespace App\Models;

class Artist extends BaseModel {
	protected $birthday;

	public function getBirthday() {
		return $this->birthday;
	}
}
