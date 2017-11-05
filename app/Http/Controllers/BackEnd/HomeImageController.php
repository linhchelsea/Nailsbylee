<?php

namespace App\Http\Controllers\BackEnd;

use App\HomeImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

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
        $homeImage = HomeImage::findOrFail($id);
        return view('backend.homeimage.edit', compact('homeImage'));
    }

    public function update(Request $request, $id)
    {
        $homeImage = HomeImage::findOrFail($id);
        $homeImage->title = $request->title;
        if($request->file('image') != null){
            //Xoa anh cu~
            File::delete('storage/home-image/'.$homeImage->name);
            $image = $request->file('image')->store('public/home-image');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $homeImage->name;
        }
        $homeImage->name = $filename;
        $homeImage->save();
        $request->session()->flash('success','Update successfully');
        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $homeImage = HomeImage::findOrFail($id);
        File::delete('storage/home-image/'.$homeImage->name);
        $homeImage->delete();
        $request->session()->flash('success','Delete successfully');
        return redirect()->back();
    }
}
