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
                <p>535 W SW Loop 323 #203 Tyler, TX 75701</p>
                <dl>
                    <dt></dt>
                    <dd>Freephone : <span> (903) 939-0572</span></dd>
                    <dd>Telephone : <span> (903) 939-0572</span></dd>
                    <dd>E-mail :&nbsp; <a href="mailto@example.com">nailsbylee@gmail.com</a></dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="contact_grid">
        <div class="container">
            <form>
                <div class="col-sm-12 col-md-4 left_grid">
                    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                    <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                    <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                </div>
                <div class="col-sm-12 col-md-8 right_grid">
                    <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                </div>
                <div class="form-submit1">
                    <input name="submit" type="submit" id="submit" value="Send Message">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
@endsection