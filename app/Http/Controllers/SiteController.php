<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function page_index()
    {
        return (view('index'));
    }

    public function page_adout()
    {
        return (view('about'));
    }

    public function page_home()
    {
        return (view('home'));
    }


}
