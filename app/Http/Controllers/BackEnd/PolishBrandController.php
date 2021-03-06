<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\PolishBrandRequest;
use App\PolishBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PolishBrandController extends Controller
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
        $polishBrand = PolishBrand::orderBy('id','DESC')->paginate(8);
        return view('backend.polish-brand.index',compact('polishBrand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.polish-brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PolishBrandRequest $request)
    {
        $polishBrand = new PolishBrand();
        $polishBrand->name = $request->name;
        $polishBrand->description = $request->description;
        $polishBrand->price = $request->price;
        if($request->file('image') != null){
            $checkFile = self::CheckFileUpload($request->file('image')->getClientOriginalName());
            if(!$checkFile){
                $request->session()->flash('fail','Image format is invalid (jpg,jpeg,png,gif)!');
                return redirect()->back();
            }
            $image = $request->file('image')->store('public/polishbrand');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = 'default.png';
        }
        $polishBrand->image = $filename;
        $polishBrand->save();
        $request->session()->flash('success','Success!');
        return redirect()->route('polishbrand.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $polishbrand = PolishBrand::findOrFail($id);
        return view('backend.polish-brand.edit', compact('polishbrand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PolishBrandRequest $request, $id)
    {
        $polishbrand = PolishBrand::findOrFail($id);
        $polishbrand->name = $request->name;
        $polishbrand->description = $request->description;
        $polishbrand->price = $request->price;
        if($request->file('image') != null){
            $checkFile = self::CheckFileUpload($request->file('image')->getClientOriginalName());
            if(!$checkFile){
                $request->session()->flash('fail','Image format is invalid (jpg,jpeg,png,gif)!');
                return redirect()->back();
            }
            if($polishbrand->image != 'default.png'){
                //Xoa anh cu~
                File::delete('storage/polishbrand/'.$polishbrand->image);
            }
            $image = $request->file('image')->store('public/polishbrand');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $polishbrand->image;
        }
        $polishbrand->image = $filename;
        $polishbrand->save();
        $request->session()->flash('success','Success!');
        return redirect()->route('polishbrand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $polishbrand = PolishBrand::findOrFail($id);
        if($polishbrand->image != 'default.png'){
            //Xoa anh cu~
            File::delete('storage/polishbrand/'.$polishbrand->image);
        }
        $polishbrand->delete();
        $request->session()->flash('success','Delete successfully');
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
