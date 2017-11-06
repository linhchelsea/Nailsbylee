<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::paginate(8);
        return view('frontend.gallery',compact('galleries'));
    }
}
