@extends('frontend.layout.frontendapp')

@section('content')
    {{--<div class="about_banner">--}}
        {{--<div class="container">--}}
            {{--<div class="banner_desc about_desc">--}}
                {{--<h1>Polish Brands</h1>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div style="margin-top: 90px;">
        <h3 class="motiveColor">{{$service->name}}</h3>
        <div class="container">
        <h4 class="motiveColor1">{{$service->description}}</h4>
        </div>
    </div>
    @foreach($serviceDetails as $service)
        <div class="about_1">
            <div class="container">
                <div class="box_1">
                    <div class="col-md-6 grid_5">
                        <h2>{{$service->name}} <span class="line"></span></h2>
                        <p>{{$service->description}}</p>
                        <a class="btn_2">{{$service->time}} | ${{$service->price}}</a>
                    </div>
                    <div class="col-md-6 grid_5 service">
                        @if(empty($service->image))
                            <img src="{{ asset('images/noimage-admin.png') }}" class="img-responsive" alt="{{$service->name}}">
                        @else
                            <img src="{{ asset('/storage/service-detail/'.$service->image) }}" class="img-responsive" alt="{{$service->name}}" >
                        @endif
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="container"><span class="linebox"></span></div>
    @endforeach
    <div style="margin-bottom: 3em;"></div>
@endsection