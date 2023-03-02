<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function page_index()
    {
        if (Auth::user()->is_admin == 1) {
            return (view('admin.index'));
        } else {
            return (view('home'));
        }
    }

    public function page_posts()
    {
        if (Auth::user()->is_admin == 1) {
            $posts = Post::all();
            return (view('admin.posts',['posts'=> $posts]));
        } else {
            return (view('home'));
        }
    }

    public function page_users()
    {
        if (Auth::user()->is_admin == 1) {
            return (view('admin.users'));
        } else {
            return (view('home'));
        }
    }

}
