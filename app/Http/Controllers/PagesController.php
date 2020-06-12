<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Work;

class PagesController extends Controller
{
    // home page
    public function home(){
        return view('pages.home');
    }

    

    public function cv_view($username){
        // Querying the database
        $user = User::where('username', '=', $username)->firstOrFail();
        $works = $user->works;
        $educations = $user->educations;
        $skills = $user->skills;
        $projects = $user->projects;
        $languages = $user->languages;
        $volunteers = $user->volunteers;
        $currentjobs = $user->currentjobs;
   
        
        $data = [
            'works'=> $works,
            'educations' => $educations,
            'skills' => $skills,
            'projects' => $projects,
            'languages' => $languages,
            'volunteers' => $volunteers,
            'currentjobs' => $currentjobs,
            'user'=> $user
        ];
        
        return view('pages.cv_view', $data);
    }


    public function printPDF($username)
    {
        $user = User::where('username', '=', $username)->firstOrFail();
        $works = $user->works;
        $educations = $user->educations;
        $skills = $user->skills;
        $projects = $user->projects;
        $languages = $user->languages;
        $volunteers = $user->volunteers;
        $currentjobs = $user->currentjobs;
        $data = [
            'works'=> $works,
            'educations' => $educations,
            'skills' => $skills,
            'projects' => $projects,
            'languages' => $languages,
            'volunteers' => $volunteers,
            'currentjobs' => $currentjobs,
            'user'=> $user
        ];
        
               
        return view('pages.pdf_view', $data)->with('success', 'Downloaded succesfully');
        
    }
}
