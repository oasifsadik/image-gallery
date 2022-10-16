<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        return view('admin.post.index');
    }
    public function add_post()
    {
        return view('admin.post.add_post');
    }
}
