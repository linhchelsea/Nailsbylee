<?php

namespace App\Http\Controllers\BackEnd;

use App\GiftCard;
use App\Http\Requests\GiftCardRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GiftCardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $giftCards = GiftCard::orderBy('id','DESC')->paginate(8);
        return view('backend.giftcard.index',compact('giftCards'));
    }

    public function create()
    {
        return view('backend.giftcard.create');
    }

    public function store(GiftCardRequest $request)
    {
        $giftCard = new GiftCard();
        $giftCard->title = $request->title;
        if($request->file('image') != null){
            $image = $request->file('image')->store('public/gift-card');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = 'default.png';
        }
        $giftCard->image = $filename;
        if($giftCard->save()){
            $request->session()->flash('success','Create successfully!');
        }else{
            $request->session()->flash('fail','Create unsuccessfully!');
        }
        return redirect()->route('gift-card.index');
    }

    public function edit($id)
    {
        $giftCard = GiftCard::findOrFail($id);
        return view('backend.giftcard.edit',compact('giftCard'));
    }

    public function update(GiftCardRequest $request, $id)
    {
        $giftCard = GiftCard::findOrFail($id);
        $giftCard->title = $request->title;
        if($request->file('image') != null){
            if($giftCard->image != 'default.png'){
                //Xoa anh cu~
                File::delete('storage/gift-card/'.$giftCard->image);
            }
            $image = $request->file('image')->store('public/gift-card');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $giftCard->image;
        }
        $giftCard->image = $filename;
        if($giftCard->save()){
            $request->session()->flash('success','Update successfully!');
        }else{
            $request->session()->flash('fail','Update unsuccessfully!');
        }
        return redirect()->back();
    }

    public function destroy(Request $request,$id)
    {
        $giftCard = GiftCard::findOrFail($id);
        if($giftCard->image != 'default.png'){
            //Xoa anh cu~
            File::delete('storage/gift-card/'.$giftCard->image);
        }
        if($giftCard->delete()){
            $request->session()->flash('success','Delete successfully!');
        }else{
            $request->session()->flash('fail','Delete unsuccessfully!');
        }
        return redirect()->back();
    }
}
