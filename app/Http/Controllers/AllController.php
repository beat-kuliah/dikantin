<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function help()
    {
        return view('help');
    }

    public function partnership()
    {
        return view('partnership');
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutus()
    {
        return view('about_us');
    }

}
