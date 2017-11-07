<?php

namespace App\Http\Controllers\BackEnd;

use App\PolishBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PolishBrandController extends Controller
{
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
    public function store(Request $request)
    {
        $polishBrand = new PolishBrand();
        $polishBrand->name = $request->name;
        $polishBrand->description = $request->description;
        $polishBrand->price = $request->price;
        if($request->file('image') != null){
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
    public function update(Request $request, $id)
    {
        $polishbrand = PolishBrand::findOrFail($id);
        $polishbrand->name = $request->name;
        $polishbrand->description = $request->description;
        $polishbrand->price = $request->price;
        if($request->file('image') != null){
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
}
