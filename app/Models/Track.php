<?php

namespace App\Models;

class Track extends BaseModel {
	protected $album_id;
	protected $length;
	protected $video_url;

	public function getAlbumId() {
		return $this->album_id;
	}

	public function getLength() {
		return $this->length;
	}

	public function hasVideo() {
		return ($this->video_url !== NULL);
	}

	public function getVideoUrl() {
		return $this->video_url;
	}
}
