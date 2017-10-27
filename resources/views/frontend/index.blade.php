@extends('frontend.layout.frontendapp')

@section('content')
<div class="banner">
    <div class="container">
        <div class="banner_desc">
            <h1>Sed ut perspiciatis<br>totam rem aperiam</h1>
            <h2>mistaken idea of<br>denouncing pleasure</h2>
        </div>
    </div>
</div>
<div class="grid_1">
    <div class="container">
        <h3 class="motiveColor">Welcome</h3>
        <h4 class="motiveColor1">But I must explain to you how all this mistaken</h4>
        <img src="{{asset('frontend/images/pic1.jpg')}}" class="img-responsive" alt=""/>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
        <div class="btn_3"><a href="#" class="btn btn-default btn-arrow"><span>learn more</span></a></div>
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
                            <p>"Si vous voulez mon avis concernant l'extremite observee, il est necessaire d'etudier la globalite des solutions de bon sens, parce que la nature a horreur du vide."</p>
                            <p class="below">-Salade de Banoui, Paris</p>
                        </div>
                    </li>
                    <li>
                        <div class="slider-top">
                            <img src="{{asset('frontend/images/2.png')}}" class="img-responsive" alt=""/>
                            <p class="second-slide">"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                            <p class="below">-Salade de Banoui, Paris</p>
                        </div>
                    </li>
                    <li>
                        <div class="slider-top">
                            <img src="{{asset('frontend/images/1.png')}}" class="img-responsive" alt=""/>
                            <p>"Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto."</p>
                            <p class="below">-Salade de Banoui, Paris</p>
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