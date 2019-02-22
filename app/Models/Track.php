<?php

namespace App\Models;

class Track extends BaseModel {
	protected $album_id;
	protected $length;

	public function getAlbumId() {
		return $this->album_id;
	}

	public function getLength() {
		return $this->length;
	}
}
