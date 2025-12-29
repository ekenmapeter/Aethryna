<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function pathway()
    {
        return view('pathway');
    }

    public function programs()
    {
        return view('programs');
    }

    public function impact()
    {
        return view('impact');
    }

    public function stories()
    {
        return view('stories');
    }
}
