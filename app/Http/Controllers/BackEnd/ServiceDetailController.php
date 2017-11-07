<?php

namespace App\Http\Controllers\BackEnd;

use App\Service;
use App\ServiceDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ServiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceDetails = ServiceDetail::orderBy('id','DESC')->paginate(10);
        if(count($serviceDetails) > 0){
            foreach ($serviceDetails as $detail){
                $serviceName = Service::findOrFail($detail->idService);
                $detail->serviceName = $serviceName->name;
            }
        }
        return view('backend.service-detail.index',compact('serviceDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('backend.service-detail.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = Service::find($request->service);
        if($service == null ){
            $request->session()->flash('fail','Service is invalid!');
            return redirect()->back();
        }
        $serviceDetail = new ServiceDetail();
        $serviceDetail->name = $request->name;
        $serviceDetail->idService = $request->service;
        $serviceDetail->price = $request->price;
        $serviceDetail->time = $request->time;
        $serviceDetail->description = $request->description;
        $filename = "";
        if($request->file('image') != null){
            $image = $request->file('image')->store('public/service-detail');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }
        $serviceDetail->image = $filename;
        if($serviceDetail->save()){
            $request->session()->flash('success','Create successfully!');
        }else{
            $request->session()->flash('fail','Create unsuccessfully!');
        }
        return redirect()->route('service-detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serviceDetail = ServiceDetail::findOrFail($id);
        $serviceName = Service::findOrFail($serviceDetail->idService);
        $serviceDetail->serviceName = $serviceName->name;
        return view('backend.service-detail.show',compact('serviceDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serviceDetail = ServiceDetail::findOrFail($id);
        $services = Service::all();
        return view('backend.service-detail.edit',compact('serviceDetail','services'));
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
        $service = Service::find($request->service);
        if($service == null ){
            $request->session()->flash('fail','Service is invalid!');
            return redirect()->back();
        }
        $serviceDetail = ServiceDetail::findOrFail($id);
        $serviceDetail->name = $request->name;
        $serviceDetail->idService = $request->service;
        $serviceDetail->price = $request->price;
        $serviceDetail->time = $request->time;
        $serviceDetail->description = $request->description;
        if($request->file('image') != null){
            //xoa anh cu~
            if($serviceDetail->image != 'default.png') {
                File::delete('storage/service-detail/' . $serviceDetail->image);
            }
            $image = $request->file('image')->store('public/service-detail');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $serviceDetail->image;
        }
        $serviceDetail->image = $filename;
        if($serviceDetail->save()){
            $request->session()->flash('success','Update successfully!');
        }else{
            $request->session()->flash('fail','Update unsuccessfully!');
        }
        return redirect()->route('service-detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $serviceDetail = ServiceDetail::findOrFail($id);
        //xoa anh cu~
        if($serviceDetail->image != 'default.png') {
            File::delete('storage/service-detail/' . $serviceDetail->image);
        }
        if($serviceDetail->delete()){
            $request->session()->flash('success','Delete successfully!');
        }else{
            $request->session()->flash('fail','Delete unsuccessfully!');
        }
        return redirect()->route('service-detail.index');
    }
}
