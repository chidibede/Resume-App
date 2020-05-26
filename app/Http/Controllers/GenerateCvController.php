<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateCvController extends Controller
{
    //
    public function generate_cv(){
        $user = auth()->user();
        return view('pages.generate_cv')->with('user', $user);
    }


    public function updateProfession(Request $request) {

        $user = auth()->user();
        $user->profession = $request->input('profession');
        $user->save();

        return response()->json(['success'=>'Profession updated','data'=> $request->profession]);
    }

    public function updateLocation(Request $request) {

        $user = auth()->user();
        $user->nationality = $request->input('nationality');
        $user->location = $request->input('location');
        $user->save();

        return response()->json(['success'=>'Location updated','data'=> [$request->location, $request->nationality]]);
    }

    public function updateEmail(Request $request) {

        $user = auth()->user();
        $user->cv_email = $request->input('email');
        $user->save();

        return response()->json(['success'=>'Email updated','data'=> $request->email]);
    }
}
