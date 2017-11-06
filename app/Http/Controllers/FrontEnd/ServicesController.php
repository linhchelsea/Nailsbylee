<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Service;
use App\Information;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id','DESC')->get();
        $information = Information::findOrFail(1);
        return view('frontend.services',compact('services', 'information'));
    }
}
