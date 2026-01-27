<?php

namespace App\Http\Controllers;

use App\Models\Pathway;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $pathways = Pathway::active()->get();
        return view('home', compact('pathways'));
    }

    public function about()
    {
        return view('about');
    }

    public function pathway()
    {
        $pathways = \App\Models\Pathway::active()->get();
        return view('pathway', compact('pathways'));
    }

    public function programs()
    {
        $pathways = Pathway::active()->paginate(4);
        return view('programs', compact('pathways'));
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
