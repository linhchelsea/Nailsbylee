@extends('frontend.layout.frontendapp')

@section('content')
    <div class="air-slider">
        <div class="slide">
            <img src="{{asset('frontend/images/index1.jpg')}}" alt="slide1"/>
        </div>
        <div class="slide">
            <img src="{{asset('frontend/images/index2.jpg')}}" alt="slide2"/>
        </div>
        <div class="slide">
            <img src="{{asset('frontend/images/index3.jpg')}}" alt="slide3"/>
        </div>
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
            <div class="col-md-3 about-grid">
                <a href="{{ route('servicedetail') }}" title="pic3" rel="title234">
                    <div class="view view-first">
                        <img src="{{asset('frontend/images/pic3.jpg')}}" class="img-responsive" alt=""/>
                        <div class="mask">
                            <div class="info"></div>
                        </div>
                    </div>
                </a>
                <h3 style="text-align: center;"><a href="{{ route('servicedetail') }}">Manicure</a></h3>
                <p style="text-align: center;" class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

            </div>
            <div class="col-md-3 about-grid">
                <a class="chocolat-image" href="{{ route('servicedetail') }}" title="name" rel="title2">
                    <div class="view view-first">
                        <img src="{{asset("/frontend/images/pic1.jpg")}}" class="img-responsive" alt=""/>
                        <div class="mask">
                            <div class="info"></div>
                        </div>
                    </div>
                </a>
                <h3 style="text-align: center;"><a href="{{ route('servicedetail') }}">Pedicure</a></h3>
                <p style="text-align: center;" class="service_desc">Lorem ipsum dolor sit amet, consectetuer a Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

            </div>
            <div class="col-md-3 about-grid">
                <a href="{{ route('servicedetail') }}" title="name" rel="title2">
                    <div class="view view-first">
                        <img src="{{asset("frontend/images/pic4.jpg")}}" class="img-responsive" alt=""/>
                        <div class="mask">
                            <div class="info"></div>
                        </div>
                    </div>
                </a>
                <h3 style="text-align: center;"><a href="{{ route('servicedetail') }}">Design</a></h3>
                <p style="text-align: center;" class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

            </div>
            <div class="col-md-3 about-grid">
                <a href="{{ route('servicedetail') }}" title="name" rel="title2">
                    <div class="view view-first">
                        <img src="{{asset("frontend/images/pic5.jpg")}}" class="img-responsive" alt=""/>
                        <div class="mask">
                            <div class="info"></div>
                        </div>
                    </div>
                </a>
                <h3 style="text-align: center;"><a href="{{ route('servicedetail') }}">Services for Children</a></h3>
                <p style="text-align: center;" class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
            </div>
            <div class="clearfix" style="margin-bottom: 20px;"> </div>
        </div>
        <div class="btn_3"><a href="#" class="btn btn-default"><span>Learn More</span></a></div>
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
                    <li>
                        <div class="slider-top">
                            <img src="{{asset('frontend/images/1.png')}}" class="img-responsive" alt=""/>
                            <p>“Thanks for keeping this salon the cleanest one I’ve ever seen during my thirteen years as a Department Inspector.”</p>
                            <p class="below">-A. L., Texas Department of Licensing and Regulation</p>
                        </div>
                    </li>
                    <li>
                        <div class="slider-top">
                            <img src="{{asset('frontend/images/pic2.jpg')}}" class="img-responsive" alt=""/>
                            <p class="second-slide">"Nails By Lee has the best services, I love it"</p>
                            <p class="below">-Salade de Banoui</p>
                        </div>
                    </li>
                    <li>
                        <div class="slider-top">
                            <img src="{{asset('frontend/images/pic3.jpg')}}" class="img-responsive" alt=""/>
                            <p class="second-slide">"Absolutely love each set I get! She's amazing at what she does! It's definitely worth it!"</p>
                            <p class="below">-Salade de Banoui</p>
                        </div>
                    </li>
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