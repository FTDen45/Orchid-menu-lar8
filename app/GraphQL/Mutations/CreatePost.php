<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;

class CreatePost
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $post = new Post();
        $post->title = $args['title'];
        $post->content = $args['content'];
        $post->user_id = $args['user_id'];


        $post->save();

        return $post;
    }
}

/*
 *  title: String!
    content: String!
    image: String!
    price: String!
    grams: String!
    main_ingredient: String!
    modifiers: String!
    structure: String!
    description: String!
 */