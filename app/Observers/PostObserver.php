<?php

namespace App\Observers;

class PostObserver
{
    public function deleting(Post $post)
    {
        $post->hero()->delete();
    }
}
