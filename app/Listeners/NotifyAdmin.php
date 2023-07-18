<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Models\User;
use App\Notifications\NewPostAlerte;
use Couchbase\Role;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAdmin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostCreated $event): void
    {
        $post = $event->post;

        $users = User::whereHas('role',function ($query){
            $query->where('role','admin');
        })->get();

        foreach ($users as $user){
            $data['title'] = $post->title;
            $user->notify(New NewPostAlerte($data));
        }


    }
}
