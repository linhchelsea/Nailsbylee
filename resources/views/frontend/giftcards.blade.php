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
        <h4 class="motiveColor1">But I must explain to you how all this mistaken But I must explain to you how all this mistaken But I must explain to you how all this mistaken</h4>
        <div class="container">
            <div class="about-grids">
                <div class="col-sm-3 about-grid">
                    <a href="{{asset("frontend/images/large.jpg")}}" title="pic2" rel="title234">
                        <div class="view view-first">
                            <img src="{{asset('frontend/images/large.jpg')}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="{{asset("/frontend/images/pic3.jpg")}}" title="pic2">Birthday</a></h3>
                </div>
                <div class="col-sm-3 about-grid chocolat-parent">
                    <a class="chocolat-image" href="{{asset("/frontend/images/pic3.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("/frontend/images/pic1.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info">abc deg</div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="{{asset("/frontend/images/pic3.jpg")}}" title="name">Thank you</a></h3>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="{{asset("frontend/images/pic4.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/pic4.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="{{asset("frontend/images/pic5.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/pic5.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
                <div class="col-sm-3 about-grid">
                    <a href="{{asset("frontend/images/pic2.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/pic2.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="{{asset("/frontend/images/pic3.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("/frontend/images/pic3.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="{{asset("frontend/images/pic4.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/pic4.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="{{asset("frontend/images/pic5.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/pic5.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @include('frontend.layout.contact')
@endsection