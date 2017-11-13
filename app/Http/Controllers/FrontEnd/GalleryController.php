<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Information;
class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('id','DESC')->paginate(8);
        $information = Information::findOrFail(1);
        return view('frontend.gallery',compact('galleries', 'information'));
    }
}
