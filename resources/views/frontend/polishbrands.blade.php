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
        <h3 class="motiveColor">Polish Brands</h3>
        <h4 class="motiveColor1">But I must explain to you how all this mistaken</h4>
    </div>
    @if(count($polishBrand) > 0)
        <?php $i = 1; ?>
        @foreach($polishBrand as $brand)
            @if($i%2 == 1)
                <div class="about_1">
                    <div class="container">
                        <div class="box_1">
                            <div class="col-md-6 grid_5">
                                <h2>{{$brand->name}} <span class="line"></span></h2>
                                <p>{{$brand->description}}</p>
                                <a class="btn_2">Price: ${{$brand->price}}</a>
                            </div>
                            <div class="col-md-6 grid_5 service">
                                @if(empty($brand->image))
                                    <img src="{{ asset('images/noimage-public.png') }}" alt="noimage" class="img-responsive">
                                @else
                                    <img src="{{ asset('/storage/polishbrand/'.$brand->image) }}" alt="{{$brand->name}}" class="img-responsive">
                                @endif
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="container"><span class="linebox"></span></div>
            @else
                <div class="about_1">
                    <div class="container">
                        <div class="box_1">
                            <div class="col-md-6 grid_5 col-md-push-6">
                                <h2>{{$brand->name}} <span class="line"></span></h2>
                                <p>{{$brand->description}}</p>
                                <a class="btn_2">Price: ${{$brand->price}}</a>
                            </div>
                            <div class="col-md-6 grid_5 col-md-pull-6 service">
                                @if(empty($brand->image))
                                    <img src="{{ asset('/frontend/images/noimage-pb.png') }}" alt="noimage" class="img-responsive">
                                @else
                                    <img src="{{ asset('/storage/polishbrand/'.$brand->image) }}" alt="{{$brand->name}}" class="img-responsive">
                                @endif
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="container"><span class="linebox"></span></div>
            @endif
            <?php $i = $i + 1;?>
        @endforeach
    @else
        <div class="container">
            <h3 style="font-family: 'Tangerine', cursive; font-size: 3em;">No papers here!!</h3>
        </div>
    @endif
    <div class="container clearfix">
        <div class="pagination-sm no-margin pull-right">
            {{ $polishBrand->links() }}
        </div>
    </div>
    <div style="margin-bottom: 3em;"></div>
@endsection