@extends('frontend.layout.frontendapp')

@section('content')
    <!------ light-box-script ----->
    <script src="{{asset("frontend/js/jquery.chocolat.js")}}"></script>
    <link rel="stylesheet" href="{{asset("frontend/css/chocolat.css")}}" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.about-grid a').Chocolat({linkImages:true});
        });
    </script>

    <!------ light-box-script ----->
    <div class="grid_4" style="margin-top: 90px;">
        <h3 class="motiveColor">Gift Cards</h3>
        <h4 class="motiveColor1">Give the gift of beauty with our gift cards!</h4>
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-3 about-grid">
                    <a href="{{asset("frontend/images/birthday.png")}}" title="Birth day">
                        <div class="view view-first">
                            <img src="{{asset('frontend/images/birthday.png')}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3>Birthday</h3>
                </div>
                <div class="col-md-3 about-grid chocolat-parent">
                    <a class="chocolat-image" href="{{asset("/frontend/images/thankyou.png")}}" title="Thank you">
                        <div class="view view-first">
                            <img src="{{asset("/frontend/images/thankyou.png")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info">abc deg</div>
                            </div>
                        </div>
                    </a>
                    <h3>Thank you</h3>
                </div>
                <div class="col-md-3 about-grid">
                    <a href="{{asset("frontend/images/anniversary.png")}}" title="Anniversary">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/anniversary.png")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3>Anniversary</h3>
                </div>
                <div class="col-md-3 about-grid">
                    <a href="{{asset("frontend/images/wedding.png")}}" title="Wedding">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/wedding.png")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3>Wedding</h3>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="row row-eq-height">
                <div class="col-md-3 about-grid">
                    <a href="{{asset("frontend/images/valentine.png")}}" title="Valentine">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/valentine.png")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3>Valentine's</h3>
                </div>
                <div class="col-md-3 about-grid">
                    <a href="{{asset("/frontend/images/motherday.png")}}" title="Mother's day">
                        <div class="view view-first">
                            <img src="{{asset("/frontend/images/motherday.png")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3>Mother's day</h3>
                </div>
                <div class="col-md-3 about-grid">
                    <a href="{{asset("frontend/images/graduate.png")}}" title="Graduate">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/graduate.png")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3>Graduate</h3>
                </div>
                <div class="col-md-3 about-grid">
                    <a href="{{asset("frontend/images/newyear.png")}}" title="New Year">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/newyear.png")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3>New year's</h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @include('frontend.layout.contact')
@endsection