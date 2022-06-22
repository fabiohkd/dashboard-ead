<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

		protected $fillable = [
			'status', 'description', 'user_id', 'lesson_id'
		];

		public function user()
		{
			return $this->belongsTo(User::class);
		}

		public function lesson()
		{
			return $this->belongsTo(Lesson::class);
		}

		public function replies()
		{
			return $this->hasMany(ReplySupport::class);
		}

		public $incrementing = false;

		protected function createdAt(): Attribute
		{
			return Attribute::make(
				get: fn ($value) => Carbon::make($value)->format('d/m/Y'),
			);
		}
}
