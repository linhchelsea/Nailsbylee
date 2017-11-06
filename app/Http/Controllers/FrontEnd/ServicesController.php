<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id','DESC')->get();
        return view('frontend.services',compact('services'));
    }
}
