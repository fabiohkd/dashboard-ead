<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplySupport extends Model
{
    use HasFactory;

		protected $fillable = [
			'user_id', 'admin_id', 'support_id', 'description'
		];

		protected $table = 'reply_support';

		public function admin()
		{
			return $this->belongsTo(Admin::class);
		}

		public function user()
		{
			return $this->belongsTo(User::class);
		}

		public function support()
		{
			return $this->belongsTo(Support::class);
		}

		public $incrementing = false;

		protected function createdAt(): Attribute
		{
			return Attribute::make(
				get: fn ($value) => Carbon::make($value)->format('d/m/Y'),
			);
		}

}
