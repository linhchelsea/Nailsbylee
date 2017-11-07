<div class="grid_2">
    <div class="container">

        <h3 class="motiveColor">Contact</h3>
        <h4 class="motiveColor1">Nail your occasion - Get nailed now!!</h4>
        @if(Session::has('success'))
            <div class="alert" >
                <p style="font-family: 'Tangerine', cursive; font-size: 2.8em;text-align: center;">{{ Session::get('success') }}</p>
            </div>
        @endif
            <form method="post" action="{{ route('contactStore') }}" accept-charset="UTF-8">

                {{ csrf_field() }}
                <input type="text" class="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                <input type="text" class="text" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                <input type="text" class="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
                <textarea name="Message" value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                <div class="form-submit1" style="float: left;">
                <input name="submit" type="submit" id="submit" value="Send">
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
</div>