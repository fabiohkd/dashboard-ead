<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

		protected $fillable = [
			'name', 'description', 'url', 'video', 'module_id'
		];

		public function module()
		{
			return $this->belongsTo(Module::class);
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
