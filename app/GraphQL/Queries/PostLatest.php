<?php

namespace App\GraphQL\Queries;
use App\Models\Post;

class PostLatest
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $posts = Post::orderBy("posts.updated_at","DESC")
                    ->join('users', [['posts.user_id', '=', 'users.id']]);
        return $posts;
    }
}
