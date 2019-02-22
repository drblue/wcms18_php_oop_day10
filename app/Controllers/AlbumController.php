<?php

namespace App\Controllers;

use App\Models\Album;

class AlbumController extends BaseController {
	public function getAlbum($id) {
		return $this->querySingle('albums', Album::class, 'id', $id);
	}

	public function getAlbums() {
		return $this->query('albums', Album::class);
	}

	public function getAlbumsForArtist($artist_id) {
		return $this->query('albums', Album::class, 'artist_id', $artist_id);
	}
}
