<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Language;

class GenerateCvController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function generate_cv(){

        
        $user = auth()->user();
        $skills = Skill::where('user_id', '=', $user->id)->get();
        $languages = Language::where('user_id', '=', $user->id)->get();
   
        $data = [
            'skills'=> $skills,
            'languages' => $languages,
            'user'=> $user
        ];
        return view('pages.generate_cv', $data);
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

    public function updatePhone(Request $request) {

        $user = auth()->user();
        $user->phone_number = $request->input('phone');
        $user->save();

        return response()->json(['success'=>'Phone updated','data'=> $request->phone]);
    }



    public function createSkills(Request $request) {

        $skill = new Skill();
        $skill->skill_name = $request->get('skill_name');
        $skill->user_id = auth()->user()->id;
        $skill->level = $request->get('level');
        $skill->save ();

        return response()->json(['success'=> 'Skills updated']);
    }


    public function updateSkills(Request $request, $id) {

        $skill = Skill::find($id);
        $skill->skill_name = $request->get('skill_name');
        $skill->level = $request->get('level');
        $skill->save ();
        return response()->json(['success'=> 'Skills updated']);
       
   }


   public function createLanguages(Request $request) {

    $language = new Language();
    $language->language_name = $request->get('language_name');
    $language->user_id = auth()->user()->id;
    $language->level = $request->get('level');
    $language->save ();
    // return redirect('/generate_cv')->with('success', '  updated successfully');
    return response()->json(['success'=> 'Language updated']);
}


public function updateLanguages(Request $request, $id) {

    $language = Language::find($id);
    $language->language_name = $request->get('language_name');
    $language->level = $request->get('level');
    $language->save ();
    return response()->json(['success'=> 'Language updated']);
   
}
   
}
