<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\HomeImage;
use App\CustomerReview;
use App\Service;
use App\Information;

class HomeController extends Controller
{
    public function index()
    {
        $homeImages = HomeImage::get();
        $customerReviews = CustomerReview::get();
        $services = Service::where('atHome','=',1)->take(4)->get();
        $information = Information::findOrFail(1);
        return view('frontend.index', compact("homeImages", "customerReviews", 'services', 'information'));
    }
}
