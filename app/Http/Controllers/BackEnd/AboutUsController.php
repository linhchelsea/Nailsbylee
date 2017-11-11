<?php

namespace App\Http\Controllers\BackEnd;

use App\AboutUs;
use App\Http\Requests\AboutUsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
class AboutUsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('IsAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUs = AboutUs::findOrFail(1);
        return view('backend.about-us.index', compact('aboutUs'));
    }
    public function aboutUsSaveVideo(Request $request){
        $aboutUs = AboutUs::findOrFail(1);
        if($request->file('video') != null){
            if($aboutUs->video != 'about_us.mp4'){
                //Xoa video cu~
                File::delete('storage/videos/'.$aboutUs->video);
            }
            $video = $request->file('video')->store('public/videos');
            $arr_filename = explode("/",$video);
            $filename = end($arr_filename);
        }else{
            $filename = $aboutUs->video;
        }
        $aboutUs->video = $filename;
        $aboutUs->save();
        $request->session()->flash('success','New video was updated successfully!');
        return redirect()->route('about-us');
    }
    public function update(AboutUsRequest $request)
    {
        $aboutUs = AboutUs::findOrFail(1);
        $aboutUs->detail = $request->detail;
        if($aboutUs->detail == null){
            $request->session()->flash('fail','Detail is required!');
            return redirect()->back();
        }
        if($request->file('image') != null){
            $checkFile = self::CheckFileUpload($request->file('image')->getClientOriginalName());
            if(!$checkFile){
                $request->session()->flash('fail','Image format is invalid (jpg,jpeg,png,gif)!');
                return redirect()->back();
            }
            if($aboutUs->image != 'aboutus.jpg'){
                //Xoa anh cu~
                File::delete('storage/aboutUs/'.$aboutUs->image);
            }
            //Up anh moi
            $image = $request->file('image')->store('public/aboutUs');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $aboutUs->image;
        }
        $aboutUs->image = $filename;
        if($aboutUs->save()){
            $request->session()->flash('success','Update successfully!');
        }else{
            $request->session()->flash('fail','Update unsuccessfully!');
        }
        return redirect()->route('about-us');
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
