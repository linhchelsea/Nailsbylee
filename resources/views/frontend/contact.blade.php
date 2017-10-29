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
            <div class="col-md-9 map_left">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
                </div>
            </div>
            <div class="col-md-3 contact_address">
                <p>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
                <dl>
                    <dt></dt>
                    <dd>Freephone : <span> +1 800 254 2478</span></dd>
                    <dd>Telephone : <span> +1 800 547 5478</span></dd>
                    <dd>FAX : <span>+1 800 658 5784</span></dd>
                    <dd>E-mail :&nbsp; <a href="mailto@example.com">info(at)nails.com</a></dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="contact_grid">
        <div class="container">
            <form>
                <div class="col-md-4 left_grid">
                    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                    <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                    <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                </div>
                <div class="col-md-8 right_grid">
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