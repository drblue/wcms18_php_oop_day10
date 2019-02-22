<?php

namespace App\Controllers;

use App\Models\Artist;

class ArtistController extends BaseController {
	public function getArtist($id) {
		// return $this->queryId('artists', Artist::class, $id);
		$res = $this->queryWhere('artists', Artist::class, 'id', $id);
		return array_shift($res); // Object(Artist);
	}

	public function getArtists() {
		return $this->queryAll('artists', Artist::class);
	}
}
