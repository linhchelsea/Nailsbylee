<?php

namespace App\Http\Controllers\FrontEnd;

use App\IndexImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ParentCat;
use App\Information;
class ServiceDetailController extends Controller
{
    public function index()
    {
        return view('frontend.servicedetail');
    }
}
