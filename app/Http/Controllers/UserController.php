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

        $user = User::get()->first();

        $data = array(
            'posts' => $posts,
            'user' =>$user
        );
    	return view('users.index')->with($data);
    }

    public function about()
    {
        $user = User::get()->first();
        $services = explode(',', $user->profile_services);
        $work = explode(',', $user->profile_work);

        $data = array(
            'user' =>$user,
            'works' =>$work,
            'services' =>$services,
        );
        return view('users.about')->with($data);
    }

    public function contact()
    {
    	$user = User::get()->first();

        $data = array(
            'user' =>$user
        );
        return view('users.contact')->with($data);
    }

    public function single($id)
    {
        $post = Post::find($id);
        $user = User::get()->first();

        $data = array(
            'post' => $post,
            'user' =>$user
        );
    	return view('users.single')->with($data);
    }

    public function work()
    {
    	$user = User::get()->first();

        $data = array(
            'user' =>$user
        );
        return view('users.work')->with($data);
    }
}
