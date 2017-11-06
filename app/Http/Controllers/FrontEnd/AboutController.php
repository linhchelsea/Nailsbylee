<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\AboutUs;

class AboutController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::findOrFail(1);
        return view('frontend.about', compact('aboutUs'));
    }
}
