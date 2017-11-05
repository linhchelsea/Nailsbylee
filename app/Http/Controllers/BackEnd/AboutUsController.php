<?php

namespace App\Http\Controllers\BackEnd;

use App\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
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
    public function update(Request $request)
    {
        $aboutUs = AboutUs::findOrFail(1);
        $aboutUs->detail = $request->detail;
        if($request->file('image') != null){

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
        $aboutUs->save();
        $request->session()->flash('success','Success !');
        return redirect()->route('about-us');
    }

}