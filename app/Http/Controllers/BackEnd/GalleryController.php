<?php

namespace App\Http\Controllers\BackEnd;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::paginate(5);
        return view('backend.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->title = $request->title;
        if($request->file('image') != null){
            $image = $request->file('image')->store('public/gallery');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }
        $gallery->image = $filename;
        $gallery->save();
        $request->session()->flash('success','Success!');
        return redirect()->route('gallery.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->title;
        if($request->file('image') != null){
            //Xoa anh cu~
            File::delete('storage/gallery/'.$gallery->image);
            $image = $request->file('image')->store('public/gallery');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $gallery->image;
        }
        $gallery->image = $filename;
        $gallery->save();
        $request->session()->flash('success','Update successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $gallery = Gallery::findOrFail($id);
        File::delete('storage/gallery/'.$gallery->image);
        $gallery->delete();
        $request->session()->flash('success','Delete successfully');
        return redirect()->back();
    }
}
