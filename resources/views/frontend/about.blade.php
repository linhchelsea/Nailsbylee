@extends('frontend.layout.frontendapp')

@section('content')
    <div class="about_banner">
        <div class="container">
            <div class="banner_desc about_desc">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
    <div style="width: 100%; text-align: center; padding: 30px 0;color: #ad160d;">
        <i class="fa fa-star fa-2x" aria-hidden="true" style="padding: 0 10px;"></i>
        <i class="fa fa-star fa-2x" aria-hidden="true" style="padding: 0 10px;"></i>
        <i class="fa fa-star fa-2x" aria-hidden="true" style="padding: 0 10px;"></i>
        <i class="fa fa-star fa-2x" aria-hidden="true" style="padding: 0 10px;"></i>
        <i class="fa fa-star fa-2x" aria-hidden="true" style="padding: 0 10px;"></i>
    </div>
        <div class="container">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                <img style="border-radius: 15px;" src="{{asset('/storage/aboutUs/'.$aboutUs->image)}}" width="100%">
            </div>
            <div class="clearfix"></div>
            <div class=" col-md-12 grid_4">
                <p class="about_detail">
                    {!! $aboutUs->detail !!}
                </p>
            </div>
            <div style="text-align: center;">
            <video controls id="about_video">
                <source src="{{asset('storage/videos/'.$aboutUs->video)}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection