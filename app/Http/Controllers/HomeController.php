<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function page(Request $request){
        return view('Homestart');
    }

    function contact(){
        return view('contact');
    }

    function home(){ 
       return view('home');
    }

    function about(){
        return view('about');
    }

    function project(){ 
        return view('projects');
    }

}
