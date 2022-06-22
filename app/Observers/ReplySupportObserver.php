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
				$replySupport->user_id = '09a6881e-7c30-4c80-bc0d-b96f5f5713a8';
    }
}
