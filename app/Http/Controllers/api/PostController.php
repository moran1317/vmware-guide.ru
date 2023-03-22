<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostListResource;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //трансформация ответов
//    public function index()
//    {
//        $posts = Post::all();
//        $result = [];
//
//        foreach ($posts as $key => $post) {
//            $result[$key] = [
//                'name' => $post->name,
//                'title' => $post->title,
//                'description' => $post->description,
//                'views' => $post->views,
//                'author' => Author::find($post->author_id)->full_name,
//                'category' => Category::find($post->category_id)->name
//            ];
//        }
//
//        return [
//            "data" => $result
//        ];
//    }

    public function index()
    {
        $posts = Post::where('view', '>', '2')->get();
        return PostListResource::collection($posts);
    }

//    public function index()
//    {
//        $posts = Post::all();
//        return $posts;
//    }
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
