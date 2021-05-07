<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;

class DeletePost
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $post = Post::find($args['id']);
        $status = $post->delete();

        return [
            'status' =>   $status,
            'message' => 'Post deleted',
        ];
    }
}
