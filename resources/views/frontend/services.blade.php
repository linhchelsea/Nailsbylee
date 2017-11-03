@extends('frontend.layout.frontendapp')

@section('content')
    <div class="grid_4" style="margin-top: 90px;">
        <h3 class="motiveColor">Services</h3>
        <h4 class="motiveColor1">You wanna get a new look from us</h4>
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-3  about-grid">
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
                <div class="col-md-3  about-grid">
                    <a class="chocolat-image" href="{{ route('servicedetail') }}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("/frontend/images/pic1.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3 style="text-align: center;"><a href="{{ route('servicedetail') }}">Pedicure</a></h3>
                    <p style="text-align: center;" class="service_desc">Lorem ipsum dolor sit amet, consectetue Lorem ipsum dolor sit amet, consectetueLorem ipsum dolor sit amet, consectetueLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                </div>
                <div class="col-md-3  about-grid">
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
                <div class="col-md-3  about-grid">
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
                <div class="row row-eq-height">
                <div class="col-md-3 about-grid">
                    <a href="{{ route('servicedetail') }}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("frontend/images/pic2.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3 style="text-align: center;"><a href="{{ route('servicedetail') }}">Waxing Services</a></h3>
                    <p style="text-align: center;" class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                </div>
                <div class="col-md-3 about-grid">
                    <a href="{{ route('servicedetail') }}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("/frontend/images/pic6.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3 style="text-align: center;"><a href="{{ route('servicedetail') }}">À La Cart</a></h3>
                    <p style="text-align: center;" class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                </div>
                <div class="col-md-3 about-grid">
                    <a href="{{ route('servicedetail') }}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("/frontend/images/pic5.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3 style="text-align: center;"><a href="{{ route('servicedetail') }}">Eyelash Extensions</a></h3>
                    <p style="text-align: center;" class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                </div>
                <div class="col-md-3 about-grid">
                    <a href="{{ route('servicedetail') }}" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="{{asset("/frontend/images/pic3.jpg")}}" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"></div>
                            </div>
                        </div>
                    </a>
                    <h3 style="text-align: center;"><a href="{{ route('servicedetail') }}">Eyebrow Tinting</a></h3>
                    <p style="text-align: center;" class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @include('frontend.layout.contact')
@endsection