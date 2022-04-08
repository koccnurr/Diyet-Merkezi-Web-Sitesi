<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FAQ extends Model {
	use SoftDeletes;
	protected $table = "faq";
	protected $fillable = ['soru_baslik', 'soru_aciklama','cevap'];

	public function scopeFiltering($query, $request) {

		if (isset($request->title)) {
			$query->where('soru_baslik', 'like', '%' . $request->title . '%');
		}
		return $query;

	}
}
