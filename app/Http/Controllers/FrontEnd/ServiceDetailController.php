<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Information;
use App\Service;
use App\ServiceDetail;
use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
    public function index(Request $request)
    {
        $information = Information::findOrFail(1);
        $serviceDetails = ServiceDetail::where('idService', '=', $request->id)->get();
        $service = Service::where('id', '=', $request->id)->first();
        return view('frontend.servicedetail', compact('information', 'serviceDetails', 'service'));
    }
}
