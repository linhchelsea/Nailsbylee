<div class="grid_2">
    <div class="container">

        <h3 class="motiveColor">Contact</h3>
        <h4 class="motiveColor1">Nail your occasion - Get nailed now!!</h4>
        @if(Session::has('success'))
            <div class="alert" >
                <p style="font-family: 'Tangerine', cursive; font-size: 2.8em;text-align: center;">{{ Session::get('success') }}</p>
            </div>
        @endif
            <form method="post" action="{{ route('contactStore') }}" accept-charset="UTF-8" class="contactForm">

                {{ csrf_field() }}
                <input type="text" class="text" name="Name" placeholder="Name">
                <input type="text" class="text" name="Email" placeholder="Email">
                <input type="text" class="text" name="Phone" placeholder="Phone">
                <textarea name="Message" placeholder="Message"></textarea>
                <div class="form-submit1" style="float: left;">
                <input name="submit" type="submit" id="submit" value="Send">
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
    <script src="{{ asset('admin/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/validate.js') }}" type="text/javascript"></script>
</div>