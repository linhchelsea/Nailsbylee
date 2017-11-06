<?php

namespace App\Http\Controllers\FrontEnd;

use App\IndexImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ParentCat;
use App\PolishBrand;
class PolishBrandsController extends Controller
{
    public function index()
    {
        $polishBrand = PolishBrand::orderBy('id','DESC')->paginate(8);
        return view('frontend.polishbrands', compact('polishBrand'));
    }
}
