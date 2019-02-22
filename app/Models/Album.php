<?php

namespace App\Models;

class Album extends BaseModel {
	protected $artist_id;
	protected $genre;

	public function getArtistId() {
		return $this->artist_id;
	}

	public function getGenre() {
		return $this->genre;
	}
}
