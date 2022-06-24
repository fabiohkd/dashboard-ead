<?php

namespace App\Observers;

use App\Models\ReplySupport;
use Illuminate\Support\Str;

class ReplySupportObserver
{
    /**
     * Handle the Admin "creating" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function creating(ReplySupport $replySupport)
    {
        $replySupport->id = Str::uuid();
				$replySupport->admin_id = auth()->user()->id;
    }
}
