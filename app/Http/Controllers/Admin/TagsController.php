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
    public function tagedit(Request $request, $id)
    {
    	$tags = Tags::findorFail($id);
    	return view('pub.tag-edit')->with('tags',$tags);
    }

    public function tagupdate(Request $request, $id)
    {
    	$tags = Tags::find($id);
    	$tags->name = $request->input('name');
    	$tags->url = $request->input('url');
    	$tags->update();

    	return redirect('/new-tags')->with('status', 'Updated');
    }


    public function tagdelete ($id)
    {
    	$tags = Tags::findorFail($id);
    	$tags->delete();

    	return redirect('/new-tags')->with('status', 'Deleted');
    }
}
