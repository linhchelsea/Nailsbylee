<?php

namespace App\Http\Controllers\BackEnd;

use App\GiftCard;
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
        $giftCards = GiftCard::paginate(8);
        return view('backend.giftcard.index',compact('giftCards'));
    }

    public function create()
    {
        return view('backend.giftcard.create');
    }

    public function store(Request $request)
    {
        $giftCard = new GiftCard();
        $giftCard->title = $request->title;
        $filename = "";
        if($request->file('image') != null){
            $image = $request->file('image')->store('public/gift-card');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }
        $giftCard->image = $filename;
        $giftCard->save();
        $request->session()->flash('success','Success!');
        return redirect()->route('gift-card.index');
    }

    public function edit($id)
    {
        $giftCard = GiftCard::findOrFail($id);
        return view('backend.giftcard.edit',compact('giftCard'));
    }

    public function update(Request $request, $id)
    {
        $giftCard = GiftCard::findOrFail($id);
        $giftCard->title = $request->title;
        if($request->file('image') != null){
            //Xoa anh cu~
            File::delete('storage/gift-card/'.$giftCard->image);
            $image = $request->file('image')->store('public/gift-card');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $giftCard->image;
        }
        $giftCard->image = $filename;
        $giftCard->save();
        $request->session()->flash('success','Update successfully');
        return redirect()->back();
    }

    public function destroy(Request $request,$id)
    {
        $giftCard = GiftCard::findOrFail($id);
        File::delete('storage/gift-card/'.$giftCard->image);
        $giftCard->delete();
        $request->session()->flash('success','Delete successfully');
        return redirect()->back();
    }
}
