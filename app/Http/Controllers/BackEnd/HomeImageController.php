<?php

namespace App\Http\Controllers\BackEnd;

use App\HomeImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeImageController extends Controller
{

    public function index()
    {
        $homeImages = HomeImage::paginate(5);
        return view('backend.homeimage.index',compact('homeImages'));
    }

    public function create()
    {
        return view('backend.homeimage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homeImage = new HomeImage();
        $homeImage->title = $request->title;
        if($request->file('image') != null){
            $image = $request->file('image')->store('public/home-image');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }
        $homeImage->name = $filename;
        $homeImage->save();
        $request->session()->flash('success','Success!');
        return redirect()->route('home-image.index');
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
