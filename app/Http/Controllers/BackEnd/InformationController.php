<?php

namespace App\Http\Controllers\BackEnd;

use App\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
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
        $information->save();
        $request->session()->flash('success','Your information was updated successfully !');
        return redirect()->route('information');
    }
}
