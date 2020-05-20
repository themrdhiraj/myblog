<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return view('users.index');
    }

    public function about()
    {
    	return view('users.about');
    }

    public function contact()
    {
    	return view('users.contact');
    }

    public function single()
    {
    	return view('users.single');
    }

    public function work()
    {
    	return view('users.work');
    }
}
