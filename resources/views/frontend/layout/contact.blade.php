<div class="grid_2">
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success"><p><strong>{{ Session::get('success') }}</strong></p></div>
        @endif
        <h3 class="motiveColor">Contact</h3>
        <h4 class="motiveColor1">Nail your occasion - Get nailed now!!</h4>
        <form method="post" action="{{ route('contactStore') }}" accept-charset="UTF-8">
            {{ csrf_field() }}
            <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
            <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
            <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
            <textarea name="Message" value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
            <div class="form-submit1" style="float: left;">
                <input name="submit" type="submit" id="submit" value="Send">
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
</div>