<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Information;
class ServiceDetailController extends Controller
{
    public function index()
    {
        $information = Information::findOrFail(1);
        return view('frontend.servicedetail', compact('information'));
    }
}
