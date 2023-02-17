<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }
    public function show(Post $post)
    {
        return $post;
    }
    public function store(Request $request)
    {

        return Post::create($request->all());
    }

    public function update(Post $post, Request $request)
    {
        $post->update($request->all());
        $post->save();

        return $post;
    }

    public function destroy($id)
    {

        $post = Post::find($id);

        $post->delete();

        return [
            "deleted" => true
        ];
    }

    public function posts(Author $author)
    {
        return $author->posts;
    }

    public function author(Post $post)
    {
        $author = $post->author;
        return $author->full_name;
    }
}
