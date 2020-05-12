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

    public function generate_cv(){
        return view('pages.generate_cv');
    }

    public function cv_view(){
        $user = auth()->user();
        $works = User::find($user->id)->works;
        $data = [
            'works'=> $works,
            'user'=> $user
        ];
        
        return view('pages.cv_view', $data);
    }
}
