<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Nails By Lee</title>
    <link rel="shortcut icon" type="image/gif" href="{{asset('frontend/images/logo.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Nails Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{asset('frontend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/font-awesome.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/bootstrap.js')}}"></script>

</head>
<div class="top-nav navbar">
    <nav class="navScroll navbar-fixed-top">
            <div class="navbar-header logo col-md-offset-1">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a href="{{ route('homepage') }}" class="logo">Nails By Lee</a></h1>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="overflow-y: visible;">
                <ul class="nav navbar-right" style="margin-right: 10px;">
                    <li><a href="{{ route('homepage') }}" class="link-kumya active scroll"><span data-letters="Home">Home</span></a></li>
                    <li><a href="{{ route('aboutus') }}" class="link-kumya"><span data-letters="About Us">About Us</span></a></li>
                    <li><a href="{{ route('services') }}" class="link-kumya"><span data-letters="Services">Services</span></a></li>
                    <li><a href="{{ route('gallery') }}" class="link-kumya"><span data-letters="Gallery">Gallery</span></a></li>
                    <li><a href="{{ route('polishbrands') }}" class="link-kumya"><span data-letters="Polish Brands">Polish Brands</span></a></li>
                    <li><a href="{{ route('giftcards') }}" class="link-kumya"><span data-letters="Gift Cards">Gift Cards</span></a></li>
                    <li><a href="{{ route('contact') }}" class="link-kumya"><span data-letters="Contact">Contact</span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
    </nav>
</div>
<!-- content -->
    @yield('content')

<div class="address">
    <div class="container">
        <div class="col-md-6 grid_3">
            <h4>Address : </h4>
            <p>535 W SW Loop 323 #203 Tyler, TX 75701</p>
        </div>
        <div class="col-md-6 grid_3">
            <h4>Phones : </h4>
            <p>(903) 939-0572</p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="footer-bottom">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true" ></i><span>Facebook</span></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram </span></a>
    </div>
</div>
</body>
</html>