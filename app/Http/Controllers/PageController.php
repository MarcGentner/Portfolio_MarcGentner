<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('main.home');
        
    }
    public function about() {
        return view('main.about');

    }
    public function contact() {
        return view('main.contact');
    }
    public function portfolio() {
        $projects = DB::table('Projects')->get();
        return view('portfolio', ['projects' => $projects]);
    }

    public function blog() {
        return view('main.blog');
    }
    public function admin() {
        return view('admin.admin');
    }

    //
}
