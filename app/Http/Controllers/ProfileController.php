<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
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

    public function index(){
        $user = auth()->user();
        return view('users.profile')->with('user', $user);
    }

    public function edit(){
        $user = auth()->user();
        return view('users.edit_profile')->with('user', $user);
    }

    public function update(User $user, Request $request)
    {
      
        // store the form values in a database
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
    

        $user->save();
        return redirect('/profile/edit')->with('success', 'User Profile updated successfully');
        
        
    }
}
