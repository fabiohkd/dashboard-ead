<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;


class Course extends Model
{
    use HasFactory;

		protected $fillable = [
			'name', 'description', 'image', 'available'
		];

		public function modules()
		{
			return $this->hasMany(Module::class);
		}

    protected $casts = [
			'id' => 'string',
	];

		public $incrementing = false;

		protected function createdAt(): Attribute
		{
			return Attribute::make(
				get: fn ($value) => Carbon::make($value)->format('d/m/Y'),
			);
		}
}
