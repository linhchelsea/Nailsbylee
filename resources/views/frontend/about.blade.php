@extends('frontend.layout.frontendapp')

@section('content')
    <div class="about_banner">
        <div class="container">
            <div class="banner_desc about_desc">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
    <div class="about_1">
        <div class="container">
            <div class=" col-md-12 grid_4">
                <p class="about_detail" style="text-align: justify;">A nail boutique with a special persona, bearing the real name, the true identity of a passionate and talented artist who created it-Ms. Lee. It’s not just a sound business built on a foundation of high quality products, professional human touch, but above all, its constant nurture with love of its creator, its diversified team of dedicated techs and a team of professional management.<br>
                    <b>“Thanks for keeping this salon the cleanest one I’ve ever seen during my thirteen years as a Department Inspector.”</b> A. L., Texas Department of Licensing and Regulation.<br >
                    At Nails By Lee,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<b>&middot;</b> We won't be able to match others’ low price; but no others can match our professional services.<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<b>&middot;</b> We are not the most magnificent of salons; but we do provide the friendliest atmosphere.<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<b>&middot;</b> We do provide wine and beverage of the patron’s choice; we also have designated suite for men, for couples and for parties of various types and special events.<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<b>&middot;</b> We won't be able to displace our neighbor in order to expand our facility; but we have worked to continuously improve the footage and constantly enhanced our quality of services.<br>
                    Ultimately, our philosophical approach is this—we are not the owners of Nails By Lee; but You, our loyal patrons, are the very true owners. We are just a team of professional techs and management who have dedicated more than six days per week to welcome and serve each patron with our skillful hands, our knowledgeable heads and most importantly, our loving hearts.<br>
                    As our patrons, you are not just our priority concern, and our business partners, but you have become very essential part of our daily life. You have journeyed with us for so many years— some have journeyed to the last day of your wonderful life. You don’t just come and go, but you have remained in our humble hearts every single day of our lives.</p>
            </div>
            {{--<div class="col-md-3 grid_5">--}}
                {{--<h5>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</h5>--}}
                {{--<h6>-denouncing pleasure</h6>--}}
            {{--</div>--}}
            <div class="clearfix"> </div>
        </div>
    </div>
    @include('frontend.layout.contact')
@endsection