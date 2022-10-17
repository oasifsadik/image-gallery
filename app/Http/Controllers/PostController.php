<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        $post = Post::all();
        return view('admin.post.index',compact('post'));
    }
    public function add_post()
    {
        $category = Category::all();
        return view('admin.post.add_post',compact('category'));
    }

    public function savepost(Request $request)
    {
        $post = new Post();
        $post->cat_id = $request->cat_id;
        $post->name = $request->name;
        $post->short_description = $request->short_description;
        $post->description = $request->description;
        if ($request->hasFile('thamnail'))
            {
                $file = $request->file('thamnail');
                $extention =$file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file -> move('thamnail/',$filename);
                $post->thamnail=$filename;
            }
            if ($request->hasFile('cover'))
            {
                $file = $request->file('cover');
                $extention =$file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file -> move('cover/',$filename);
                $post->cover=$filename;
            }
            if ($request->hasFile('image'))
            {
                $file = $request->file('image');
                $extention =$file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file -> move('image/',$filename);
                $post->image=$filename;
            }
        $post->save();
        return redirect('/post');
    }
}
