@extends('frontend.layout.frontendapp')

@section('content')
    <div class="air-slider">
        @foreach($homeImages as $image)
            <div class="slide">
                @if(empty($image->name))
                    <img src="{{asset('images/noimage-public.png')}}" alt="{{$image->title}}"/>
                @else
                    <img src="{{asset('storage/home-image/'.$image->name)}}" alt="{{$image->title}}">
                @endif
                    <p>{{$image->title}}</p>
            </div>
        @endforeach
    </div>
    <script>
        var slider = new airSlider({
            autoPlay: true,
            autoPlayTime: 5000,
            width: '100%',
            height: 'auto'
        });
    </script>

<div class="grid_1">
    <h3 class="motiveColor">Services</h3>
    <h4 class="motiveColor1">You wanna get a new look from us</h4>
    <div class="container">
        <div class="row row-eq-height">
            @foreach($services as $service)
                <div class="col-md-3 about-grid">
                    <a href="{{ route('servicedetail') }}" title="{{$service->name}}">
                        <div class="view view-first">
                            @if(empty($service->image))
                                <img src="{{asset('images/noimage-public.png')}}" class="img-responsive" alt="noImage"/>
                            @else
                                <img src="{{asset('storage/service/'.$service->image)}}" class="img-responsive" alt=""/>
                            @endif
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3 style="text-align: center;"><a href="{{ route('servicedetail') }}">{{$service->name}}</a></h3>
                    <p style="text-align: center;" class="service_desc">{{$service->preview}}</p>
                </div>
            @endforeach
            <div class="clearfix" style="margin-bottom: 20px;"> </div>
        </div>
        <div class="btn_3"><a href="{{ route('services') }}" class="btn btn-default"><span>Learn More</span></a></div>
    </div>
</div>
<!--- Slider Starts Here --->
<div class="slider">
    <div class="container">
        <div class="slider-content">
            <script src="{{asset('frontend/js/responsiveslides.min.js')}}"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });
            </script>
            <!----//End-slider-script---->
            <!-- Slideshow 4 -->
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider4">
                    @foreach($customerReviews as $review)
                        <li>
                            <div class="slider-top">
                                @if(empty($review->image))
                                    <img src="{{asset('images/noimage-public.png')}}" alt="{{$review->name}}"/>
                                @else
                                    <img src="{{asset('storage/reviews/'.$review->image)}}" alt="{{$review->name}}">
                                @endif
                                <p>“{{$review->content}}”</p>
                                <p class="below">-{{$review->name}}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="clearfix"> </div>
            <!--- banner Slider Ends Here --->
        </div>
    </div>
</div>
<!--- Slider Ends Here --->
@include('frontend.layout.contact')
@endsection