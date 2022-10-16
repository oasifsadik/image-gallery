<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.dashboard',compact('categories'));
    }

    public function add()
    {
        return view('admin.add_category');
    }

    public function save(Request $request)
    {
        Category::create([
            'name' => $request->name
        ]);
        return redirect('/dashboard')->with('status',"Category Added Successfully");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.edit',compact('category'));
    }
    public function update(Request $request,$id)
    {
        # code...
    }
}
