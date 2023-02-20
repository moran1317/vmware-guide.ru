<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function page_index()
    {
        return (view('admin.index'));
    }

    public function page_posts()
    {
        $posts = Post::all();
        return (view('admin.posts',['posts'=> $posts]));
    }

    public function page_users()
    {
        return (view('admin.users'));
    }


}
