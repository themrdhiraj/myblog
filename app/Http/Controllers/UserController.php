<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;

class UserController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $name = User::find(1);

        $data = array(
            'posts' => $posts,
            'user' => $name
        );
    	return view('users.index')->with($data);
    }

    public function about()
    {
    	return view('users.about');
    }

    public function contact()
    {
    	return view('users.contact');
    }

    public function single($id)
    {
        $post = Post::find($id);
        $name = User::find($post->user_id);

        $data = array(
            'post' => $post,
            'user' => $name
        );
    	return view('users.single')->with($data);
    }

    public function work()
    {
    	return view('users.work');
    }
}
