<?php

namespace App\Models;

use App\Models\Album;
use Illuminate\Database\Eloquent\Model;

class Track extends Model {
	public function album() {
		return $this->belongsTo(Album::class);
	}
}
