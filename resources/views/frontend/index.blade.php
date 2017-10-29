@extends('frontend.layout.frontendapp')

@section('content')
<div class="banner">
    <div class="container">
        <div class="banner_desc">
            <h1>You nails will inspire</h1>
            <h2>We will nail you<br>and you will like it.</h2>
        </div>
    </div>
</div>
<div class="grid_1">
    <div class="container">
        <h3 class="motiveColor">Welcome</h3>
        <h4 class="motiveColor1">You wanna get a new look from us</h4>
        <img src="{{asset('frontend/images/1.jpg')}}" class="img-responsive" alt=""/>
        <p>A nail boutique with a special persona, bearing the real name, the true identity of a passionate and talented artist who created it-Ms. Lee. It’s not just a sound business built on foundation of high quality products, professional human touch, but above all, its constant nurture by love of its creator, its diversified team of dedicated techs and a team of professional management.</p>
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
                            <img src="{{asset('frontend/images/2.png')}}" class="img-responsive" alt=""/>
                            <p class="second-slide">"Nails By Lee has the best services, I love it"</p>
                            <p class="below">-Salade de Banoui</p>
                        </div>
                    </li>
                    <li>
                        <div class="slider-top">
                            <img src="{{asset('frontend/images/2.png')}}" class="img-responsive" alt=""/>
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