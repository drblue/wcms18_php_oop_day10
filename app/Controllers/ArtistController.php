<?php

namespace App\Controllers;

use App\Models\Artist;

class ArtistController extends BaseController {
	public function getArtist($id) {
		return $this->querySingle('artists', Artist::class, 'id', $id);
	}

	public function getArtists() {
		return $this->query('artists', Artist::class, null, null);
	}
}
