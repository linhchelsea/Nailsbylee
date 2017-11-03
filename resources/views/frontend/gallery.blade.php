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
    <div style="margin-top: 90px;"></div>
    <div class="grid_4">
        <h3 class="motiveColor">Gallery</h3>
        <h4 class="motiveColor1">You wanna get a new look from us</h4>
        <div class="container">
            <div class="about-grids">
                <div class="col-md-3 about-grid gallery">
                    <a href="{{asset("frontend/images/pic6.jpg")}}" title="pic2" rel="title234">
                        <div class="view view-first">
                            <img src="{{asset('frontend/images/pic6.jpg')}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 about-grid gallery">
                    <a class="chocolat-image" href="{{asset("/frontend/images/pic1.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("/frontend/images/pic1.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 about-grid gallery">
                    <a href="{{asset("frontend/images/pic3.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/pic3.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 about-grid gallery">
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
                <div class="col-md-3 about-grid gallery">
                    <a href="{{asset("frontend/images/pic2.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/pic2.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 about-grid gallery">
                    <a href="{{asset("/frontend/images/pic3.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("/frontend/images/pic3.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 about-grid gallery">
                    <a href="{{asset("frontend/images/pic4.jpg")}}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/pic4.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 about-grid gallery">
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


@endsection