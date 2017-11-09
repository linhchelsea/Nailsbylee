<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\ServiceRequest;
use App\Service;
use App\ServiceDetail;
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
        $services = Service::orderBy('id','DESC')->paginate(5);
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
    public function store(ServiceRequest $request)
    {
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->preview = $request->preview;
        $service->atHome = 0;
        if($request->file('image') != null){
            $image = $request->file('image')->store('public/service');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = 'default.png';
        }
        $service->image = $filename;
        if($service->save()){
            $request->session()->flash('success','Create successfully!');
        }else{
            $request->session()->flash('fail','Create unsuccessfully!');
        }
        return redirect()->route('service.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.service.show',compact('service'));
    }

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
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->preview = $request->preview;
        if($request->file('image') != null){
            //xoa anh cu~
            if($service->image != 'default.png') {
                File::delete('storage/service/' . $service->image);
            }
            $image = $request->file('image')->store('public/service');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $service->image;
        }
        $service->image = $filename;
        if($service->save()){
            $request->session()->flash('success','Update successfully!');
        }else{
            $request->session()->flash('fail','Update unsuccessfully!');
        }
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
        //xoa danh sach service detail
        $serviceDetails = ServiceDetail::where('idService','=',$service->id)
                                        ->get();
        if(count($serviceDetails) > 0){
            foreach ($serviceDetails as $detail){
                //xoa anh cu~
                if($detail->image != 'default.png') {
                    File::delete('storage/service-detail/' . $detail->image);
                }
                $detail->delete();
            }
        }
        //xoa anh cua service
        if($service->image != 'default.png') {
            File::delete('storage/service/' . $service->image);
        }
        if($service->delete()){
            $request->session()->flash('success','Delete successfully!');
        }else{
            $request->session()->flash('fail','Delete unsuccessfully!');
        }
        return redirect()->back();
    }

    public function UpdateFeatureService(Request $request)
    {
        $id = $request->id;
        $service = Service::findOrFail($id);
        $service->atHome = !($service->atHome);
        $service->save();
    }
}
