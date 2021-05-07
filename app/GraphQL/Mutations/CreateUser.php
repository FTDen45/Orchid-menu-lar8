<?php

namespace App\GraphQL\Mutations;

class CreateUser
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
//        $post = new Post();
//        $post->title = $args['title'];
//        $post->content = $args['content'];

        $user = User::create([
            'name' => $args['name'],
            'email' => $args['email'],
            'email_verified_at' => $args['email_verified_at'],
            'password' => $args['password'],
            'remember_token' => $args['remember_token'],
            'created_at' => $args['created_at'],
            'updated_at' => $args['updated_at'],

        ]);

        $user->save();

        return $user;
    }
}

/*
 *  name: String!
    email: String!
    email_verified_at: String
    password: String!
    remember_token: String!
    created_at: String!
    updated_at: String!
 */