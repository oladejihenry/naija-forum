<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class DashboardController extends Controller
{
    public function getposts (Request $request)
    {
    	$post= Post::latest()->paginate(15);
       
        return view('pub.all-posts')->with('post', $post);
    }

    public function getpostsdelete ($id)
    {
    	$post = Post::findorFail($id);
    	$post->delete();

    	return redirect('/all-posts')->with('status', 'Deleted');
    }


    //Users Part

    public function registered()
    {
    	$users = User::latest()->paginate(15);
    	return view('pub.register')->with('users',$users);
    }

    public function registeredit(Request $request, $id)
    {
    	$users = User::findorFail($id);
    	return view('pub.register-edit')->with('users',$users);
    }

    public function registerupdate(Request $request, $id)
    {
    	$users = User::find($id);
    	$users->name = $request->input('name');
    	$users->usertype = $request->input('usertype');
    	$users->update();

    	return redirect('/role-register')->with('status', 'Updated');
    }
}
