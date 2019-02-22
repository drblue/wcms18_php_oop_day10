<?php

namespace App\Controllers;

use App\Models\Track;

class TrackController extends BaseController {
	public function getTrack($id) {
		return $this->queryId('tracks', Track::class, $id);
	}

	public function getTracks() {
		return $this->queryAll('tracks', Track::class);
	}

	public function getTracksForAlbum($album_id) {
		return $this->queryWhere('tracks', Track::class, 'album_id', $album_id);
	}
}
