<?php

namespace App\Controllers;

use App\Models\Album;

class AlbumController extends BaseController {
	public function getAlbum($id) {
		return $this->queryId('albums', Album::class, $id);
	}

	public function getAlbums() {
		return $this->queryAll('albums', Album::class);
	}

	public function getAlbumsForArtist($artist_id) {
		return $this->queryWhere('albums', Album::class, 'artist_id', $artist_id);
	}
}
