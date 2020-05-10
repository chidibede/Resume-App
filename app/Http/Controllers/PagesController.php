<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.cv_view');
    }
}
