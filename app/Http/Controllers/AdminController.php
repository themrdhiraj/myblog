<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class AdminController extends Controller
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
    
    public function index()
    {
    	return view('admin.dashboard');
    }

    public function profile()
    {
        $user = User::find(1);
        return view('admin.profile')->with('user', $user);
    }

    public function profileUpdate(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'profile_designation' => 'required',
            'profile_image' => 'image|nullable|max:1999',
            'profile_facebook' => 'required',
            'profile_linkedin' => 'required',
            'profile_github' => 'required',
            'profile_twitter' => 'required',
        ]);

        //handle file upload
        if ($request->hasFile('profile_image')) {

            //get file name with the extension
            $fileNameWithExt = $request->file('profile_image')->getClientOriginalName();

            //get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get just ext
            $extension = $request->file('profile_image')->getClientOriginalExtension();

            //file name to store

            $fileNameToStore = 'profile.'.$extension;

            //upload image
            $path = $request->file('profile_image')->storeAs('public/profile_image', $fileNameToStore);
        }

        // update profile
        $user_id = $request->input('user_id');
        $user = User::find($user_id);
        $user->name = $request->input('name');
        $user->profile_designation = $request->input('profile_designation');
        $user->profile_facebook = $request->input('profile_facebook');
        $user->profile_twitter = $request->input('profile_twitter');
        $user->profile_linkedin = $request->input('profile_linkedin');
        $user->profile_github = $request->input('profile_github');
        // $post->profile_image = $fileNameToStore;
        
         if ($request->hasFile('profile_image')) {
            Storage::delete('public/profile_image/' . $user->profile_image);
            $user->profile_image = $fileNameToStore;
        }

        $success = $user->save();

        if ($success) {
            return redirect('/profile')->with('success', 'Profile updated successfully!');
        }else{
            return redirect('/profile')->with('error', 'Profile not updated!');
        }
    }


    public function aboutme()
    {
        $aboutme = User::find(1);
        return view('admin.aboutme')->with('aboutme', $aboutme);
    }

    public function aboutmeUpdate(Request $request)
    {
       $this->validate($request,[
            'profile_aboutme' => 'required',
        ]);

        // update profile
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $user->profile_aboutme = $request->input('profile_aboutme');
        $user->profile_services = $request->input('profile_services');
        $user->profile_work = $request->input('profile_work');

        $success = $user->save();

        if ($success) {
            return redirect('/aboutme')->with('success', 'About information updated successfully!');
        }else{
            return redirect('/aboutme')->with('error', 'About information not updated!');
        }
    }
}
