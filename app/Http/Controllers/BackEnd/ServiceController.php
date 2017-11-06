<?php

namespace App\Http\Controllers\BackEnd;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id','DESC')->get();
        return view('backend.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->preview = $request->preview;
        $service->atHome = 0;
        $filename = "";
        if($request->file('image') != null){
            $image = $request->file('image')->store('public/service');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }
        $service->image = $filename;
        $service->save();
        $request->session()->flash('success','Success!');
        return redirect()->route('service.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.service.edit', compact('service'));
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
        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->preview = $request->preview;
        if($request->file('image') != null){
            //Xoa anh cu~
            File::delete('storage/service/'.$service->image);
            $image = $request->file('image')->store('public/service');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $service->image;
        }
        $service->image = $filename;
        $service->save();
        $request->session()->flash('success','Success!');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        File::delete('storage/service/'.$service->image);
        $service->delete();
        $request->session()->flash('success','Delete successfully');
        return redirect()->back();
    }
}
