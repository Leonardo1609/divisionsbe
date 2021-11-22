<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

	protected $fillable = [
		'name',
		'division_id',
		'ambassador_id',
		'num_collaborators',
		'level'
	];

	public function division() {
		return $this->belongsTo(Division::class, 'division_id');
	}

	public function ambassador() {
		return $this->belongsTo(Ambassador::class, 'ambassador_id');
	}

	public function divisions() {
		return $this->hasMany(Division::class, 'division_id');
	}
}
