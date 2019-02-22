<?php

namespace App\Controllers;

use App\Models\Track;

class TrackController extends BaseController {
	public function getTrack($id) {
		return $this->querySingle('tracks', Track::class, 'id', $id);
	}

	public function getTracks() {
		return $this->query('tracks', Track::class);
	}

	public function getTracksForAlbum($album_id) {
		return $this->query('tracks', Track::class, 'album_id', $album_id);
	}
}
