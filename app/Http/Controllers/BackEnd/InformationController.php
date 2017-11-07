<?php

namespace App\Http\Controllers\BackEnd;

use App\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('IsAdmin');
    }
    public function index()
    {
        $information = Information::findOrFail(1);
        return view('backend.information.index' , compact('information') );
    }

    public function update(Request $request)
    {
        $information = Information::findOrFail(1);
        $information->name = $request->name;
        $information->email = $request->email;
        $information->phone = $request->phone;
        $information->facebook = $request->facebook;
        $information->instagram = $request->instagram;
        $information->twitter = $request->twitter;
        $information->address = $request->address;
        if($information->save()){
            $request->session()->flash('success','Your information was updated successfully!');
        }else{
            $request->session()->flash('fail','Your information was updated unsuccessfully !!');
        }
        return redirect()->route('information');
    }
}
