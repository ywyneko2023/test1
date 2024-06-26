<?php


namespace App\Http\Repositories;
use App\Models\Post;
class PostRepository{
    public function index()
    {
        $posts = Post::all();
        Log::debug($posts);
        return $posts;
    }
}
