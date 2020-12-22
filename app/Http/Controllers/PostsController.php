<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show($id)
    {
        $post = Post::find($id);
        $data = [
            'post' => $post
        ];

        return view('posts.show', $data);
    }
}
