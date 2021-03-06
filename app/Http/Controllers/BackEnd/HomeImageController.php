<?php

namespace App\Http\Controllers\BackEnd;

use App\HomeImage;
use App\Http\Requests\HomeImageRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class HomeImageController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $homeImages = HomeImage::orderBy('id','DESC')->paginate(5);
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
    public function store(HomeImageRequest $request)
    {
        $homeImage = new HomeImage();
        $homeImage->title = $request->title;
        if($request->file('image') != null){
            $checkFile = self::CheckFileUpload($request->file('image')->getClientOriginalName());
            if(!$checkFile){
                $request->session()->flash('fail','Image format is invalid (jpg,jpeg,png,gif)!');
                return redirect()->back();
            }
            $image = $request->file('image')->store('public/home-image');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = 'default.png';
        }
        $homeImage->name = $filename;
        if($homeImage->save()){
            $request->session()->flash('success','Create successfully!');
        }else{
            $request->session()->flash('fail','Create unsuccessfully!');
        }
        return redirect()->route('home-image.index');
    }


    public function edit($id)
    {
        $homeImage = HomeImage::findOrFail($id);
        return view('backend.homeimage.edit', compact('homeImage'));
    }

    public function update(HomeImageRequest $request, $id)
    {
        $homeImage = HomeImage::findOrFail($id);
        $homeImage->title = $request->title;
        if($request->file('image') != null){
            $checkFile = self::CheckFileUpload($request->file('image')->getClientOriginalName());
            if(!$checkFile){
                $request->session()->flash('fail','Image format is invalid (jpg,jpeg,png,gif)!');
                return redirect()->back();
            }
            if($homeImage->name != 'default.png'){
                //Xoa anh cu~
                File::delete('storage/home-image/'.$homeImage->name);
            }
            $image = $request->file('image')->store('public/home-image');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $homeImage->name;
        }
        $homeImage->name = $filename;
        if($homeImage->save()){
            $request->session()->flash('success','Update successfully!');
        }else{
            $request->session()->flash('fail','Update unsuccessfully!');
        }
        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $homeImage = HomeImage::findOrFail($id);
        if($homeImage->name != 'default.png'){
            //Xoa anh cu~
            File::delete('storage/home-image/'.$homeImage->name);
        }
        if($homeImage->delete()){
            $request->session()->flash('success','Delete successfully!');
        }else{
            $request->session()->flash('fail','Delete unsuccessfully!');
        }
        return redirect()->back();
    }
    public static function CheckFileUpload($filename){
        $arrFilename = explode('.',$filename);
        $format = $arrFilename[count($arrFilename)-1];
        if ($format == 'png' || $format == 'jpg' ||$format == 'jpeg' ||$format == 'gif' ){
            return true;
        }
        return false;
    }
}
