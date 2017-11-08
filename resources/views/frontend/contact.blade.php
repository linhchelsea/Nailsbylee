@extends('frontend.layout.frontendapp')

@section('content')
    <div class="about_banner">
        <div class="container">
            <div class="banner_desc about_desc">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
    <div class="typography">
        <div class="container">
            <h2>How to find us</h2>
            <div class="col-sm-12 col-md-9 map_left">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.2748943008!2d-95.31003194980421!3d32.30446771514467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8649cc7651d011eb%3A0xc836ccec9ab3467c!2s535+W+SW+Loop+323+%23203%2C+Tyler%2C+TX+75701!5e0!3m2!1svi!2s!4v1509270207131" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 contact_address">
                <p>{{$information->address}}</p>
                <dl>
                    <dt></dt>
                    <dd>Telephone : <span>{{$information->phone}}</span></dd>
                    <dd>E-mail :&nbsp; <a href="javascript:void(0)" style="cursor: text;">{{$information->email}}</a></dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="contact_grid">
        <div class="container">
            @if(Session::has('success'))
                <div class="alert" >
                    <p style="font-family: 'Tangerine', cursive; font-size: 2.8em;text-align: center;">{{ Session::get('success') }}</p>
                </div>
            @endif
            <form method="post" action="{{ route('contactStore') }}" accept-charset="UTF-8" class="contactForm">
                {{ csrf_field() }}
                <div class="col-sm-12 col-md-4 left_grid">
                    <input type="text" class="text" name="Name" placeholder="Name" style="color: ">
                    <input type="text" class="text" name="Email" placeholder="Email">
                    <input type="text" class="text" name="Phone" placeholder="Phone">
                </div>
                <div class="col-sm-12 col-md-8 right_grid">
                    <textarea name="Message" placeholder="Message"></textarea>
                </div>
                <div class="form-submit1">
                    <input name="submit" type="submit" id="submit" value="Send Message">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    <script src="{{ asset('admin/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/validate.js') }}" type="text/javascript"></script>
@endsection