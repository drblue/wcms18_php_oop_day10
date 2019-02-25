<?php

namespace App\Models;

use App\Models\Album;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'birthday'];

	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;

	public function albums() {
		return $this->hasMany(Album::class);
	}
}
