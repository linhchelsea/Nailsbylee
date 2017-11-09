<?php

namespace App\Http\Controllers\BackEnd;

use App\CustomerReview;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CustomerReviewController extends Controller
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
        $customerReviews = CustomerReview::orderBy('id','DESC')->paginate(10);
        return view('backend.customer-review.index',compact('customerReviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.customer-review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        $review = new CustomerReview();
        $review->name = $request->fullname;
        $review->content = $request->reviewContent;
        if($request->file('image') != null){
            $image = $request->file('image')->store('public/reviews');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = 'avatar.png';
        }
        $review->image = $filename;
        if($review->save()){
            $request->session()->flash('success','Create successfully!');
        }else{
            $request->session()->flash('fail','Create unsuccessfully!');
        }
        return redirect()->route('review.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = CustomerReview::findOrFail($id);
        return view('backend.customer-review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewRequest $request, $id)
    {
        $review = CustomerReview::findOrFail($id);
        $review->name = $request->fullname;
        $review->content = $request->reviewContent;
        if($request->file('image') != null){
            if($review->image != 'avatar.png'){
                //Xoa anh cu~
                File::delete('storage/reviews/'.$review->image);
            }

            $image = $request->file('image')->store('public/reviews');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $review->image;
        }
        $review->image = $filename;
        if($review->save()){
            $request->session()->flash('success','Update successfully!');
        }else{
            $request->session()->flash('fail','Update unsuccessfully!');
        }
        return redirect()->route('review.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $review = CustomerReview::findOrFail($id);
        if($review->image != 'avatar.png'){
            //Xoa anh cu~
            File::delete('storage/reviews/'.$review->image);
        }
        if($review->delete()){
            $request->session()->flash('success','Delete successfully!');
        }else{
            $request->session()->flash('fail','Delete unsuccessfully!');
        }
        return redirect()->back();
    }
}
