<?php

namespace App\Observers;

use App\Models\Lesson;
use Illuminate\Support\Str;

class LessonObserver
{
	public function creating(Lesson $lesson)
	{
			$lesson->id = Str::uuid();
			$lesson->url = Str::slug($lesson->name);
		}
		
		public function updating(Lesson $lesson)
		{
			$lesson->url = Str::slug($lesson->name);
	}

}
