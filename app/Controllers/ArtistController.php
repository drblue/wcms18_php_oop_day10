<?php

namespace App\Controllers;

use App\Models\Artist;

class ArtistController extends BaseController {
	public function getArtist($id) {
		return $this->queryId('artists', Artist::class, $id);
	}

	public function getArtists() {
		return $this->queryAll('artists', Artist::class);
	}
}
