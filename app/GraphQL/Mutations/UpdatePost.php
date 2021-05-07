<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;

class UpdatePost
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $post = Post::find($args['id']);

        if(isset($args['title'])){
            $post->title = $args['title'];
        }

        if(isset($args['content'])){
            $post->content = $args['content'];
        }


        $post->save();

        return $post;
    }
}
