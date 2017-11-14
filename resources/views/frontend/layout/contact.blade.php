<div class="grid_2">
    <div class="container" style="margin: auto;">
        <h3 class="motiveColor">Contact</h3>
        <h4 class="motiveColor1">Nail your occasion - Get nailed now!!</h4>
        @if(Session::has('success'))
            <div class="alert" >
                <p style="font-family: 'Tangerine', cursive; font-size: 2.8em;text-align: center;">{{ Session::get('success') }}</p>
            </div>
        @endif
            <form class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 contactForm" method="post" action="{{ route('contactStore') }}" accept-charset="UTF-8" >
                {{ csrf_field() }}
                <input type="text" class="text" name="Name" placeholder="Name">
                <p class="error" >{{$errors->first('Name')}}</p>
                <input type="text" class="text" name="Email" placeholder="Email">
                <p class="error" >{{$errors->first('Email')}}</p>
                <input type="text" class="text" name="Phone" placeholder="Phone">
                <p class="error" >{{$errors->first('Phone')}}</p>
                <textarea name="Message" placeholder="Message"></textarea>
                <p class="error" >{{$errors->first('Message')}}</p>
                <div class="form-submit1" style="float: left;">
                <input name="submit" type="submit" id="submit" value="Send">
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
    <script src="{{ asset('backend/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/validate.js') }}" type="text/javascript"></script>
</div>