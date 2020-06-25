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

        // Function that controls the edit profile view
        $user = auth()->user();
        return view('users.edit_profile')->with('user', $user);
    }

    public function update(User $user, Request $request)
    {

        // Function that controls the update user request


        // validate the form
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'profile_pics' => 'image|nullable|max:1999'
        ]);

         // validate the image
         if($request->hasFile('profile_pics')){
            $fileNameExt = $request->file('profile_pics')->getClientOriginalName();
            $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
            $fileExtension = $request->file('profile_pics')->getClientOriginalExtension();
            $fileNameToStore = $fileName."_".time().".".$fileExtension;
            $path = $request->file('profile_pics')->storeAs('public/profile_pics', $fileNameToStore);

        }
      
        // store the form values in a database
        $user = auth()->user();
        $user->name = ucfirst($request->input('name'));
        $user->username = ucfirst($request->input('username'));
        $user->email = $request->input('email');
        $user->website = $request->input('website');
        $user->linkedin = $request->input('linkedin');
        $user->twitter = $request->input('twitter');
        $user->facebook = $request->input('facebook');
        if($request->hasFile('profile_pics')){
            $user->profile_pics = $fileNameToStore;
        }
    
        // Save the Updated User Profile
        $user->save();
        return redirect('/profile/edit')->with('success', 'User Profile updated successfully');
        
        
    }

    
}
