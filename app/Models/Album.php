<?php

namespace App\Models;

use App\Models\Artist;
use App\Models\Track;
use Illuminate\Database\Eloquent\Model;

class Album extends Model {
	public function artist() {
		return $this->belongsTo(Artist::class);
	}

	public function tracks() {
		return $this->hasMany(Track::class);
	}
}
