<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        return view('pages.cv_view')->with('user', $user);
    }
}
