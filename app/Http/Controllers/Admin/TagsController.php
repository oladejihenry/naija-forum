<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class TagsController extends Controller
{
    public function index()
    {
        $category = Category::latest()->paginate(15);
    	return view('pub.new-tags')->with('category',$category);
    }

    public function store(Request $request)
    {
    	$category = new Category;

    	$category->name = $request->input('name');

    	$category->save();
    	return redirect('/new-tags')->with('success', 'Updated');
    }
}
