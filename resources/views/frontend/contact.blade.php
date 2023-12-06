@extends('frontend.layouts.app')
@section('title')
Contact
@endsection
@section('content')

<hr class="bg-succcess ">
<section id="section-contact" class="page-section pt-0">

    <div class="heading-block center mx-auto" style="max-width: 700px">
        <h2 class=" nott ls0">Contact With Us</h2>

    </div>
    <div>

        <div class="row mx-0 bottommargin-lg align-items-stretch">
            <div class="col-lg-6 col-md-6 d-none d-md-block px-0 ">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.698820755301!2d90.40213841498219!3d23.793736984568053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e6b3c2401%3A0x1600e399cb997341!2sA%20R%20Tower%2C%20Bir%20Uttam%20Aminul%20Haque%20Sarak%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1683729512924!5m2!1sen!2sbd"
                    width="100px" height="60px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-lg-6 col-md-6" style="background-color: #F5F5F5;">
                <div class="col-padding">
                    <h3 class="font-body fw-normal ls1">Our Headquarters</h3>

                    <div style="font-size: 16px; line-height: 1.7;">
                        <address style="line-height: 1.7;">
                            <strong>Bangladesh:</strong><br>
                            A R Tower
                            Bir Uttam Aminul Haque Sarak<br>
                             Dhaka, 1212<br>
                        </address>



                        <div class="clear topmargin"></div>

                        <abbr title="Phone Number"><strong>Phone:</strong></abbr>
                        <a href="tel:01325074486">(+880)-1325074486</a>
                       <br>

                        <abbr title="Email Address"><strong>Email:</strong></abbr>info@sanmigroup.com.bd
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="container clearfix">

        <div class="mx-auto topmargin" style="max-width: 850px;">

            <div class="">

                <div class=""></div>

                <form class="row mb-0" id="template-contactform" name="template-contactform"
                    action="include/form.php" method="post">

                    <div class="form-process">
                        <div class="css3-spinner">
                            <div class="css3-spinner-scale-ripple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <input type="text" id="template-contactform-name" name="template-contactform-name"
                            value="" class="sm-form-control border-form-control required"
                            placeholder="Name"required />
                    </div>
                    <div class="col-md-6 mb-4">
                        <input type="email" id="template-contactform-email"
                            name="template-contactform-email" value=""
                            class="required email sm-form-control border-form-control"
                            placeholder="Email Address" required/>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-4 mb-4">
                        <input type="text" id="template-contactform-phone"
                            name="template-contactform-phone" value=""
                            class="sm-form-control border-form-control" placeholder="Phone"required />
                    </div>

                    <div class="col-md-8 mb-4">
                        <input type="text" id="template-contactform-subject" name="subject"
                            value="" class="required sm-form-control border-form-control"
                            placeholder="Subject" required/>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-12 mb-4">
                        <textarea class="required sm-form-control border-form-control" id="template-contactform-message"
                            name="template-contactform-message" rows="7" cols="30" placeholder="Your Message"required></textarea>
                    </div>

                    <div class="col-12 center mb-4">
                        <button class="button button-border button-circle fw-medium ms-0 topmargin-sm"
                            type="submit" id="template-contactform-submit"
                            name="template-contactform-submit" value="submit">Send Message</button>
                        <br>
                        <small style="display: block; font-size: 13px; margin-top: 15px;">We'll do our best to
                            get back to you within 6-8 working hours.</small>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-12 d-none">
                        <input type="text" id="template-contactform-botcheck"
                            name="template-contactform-botcheck" value="" class="sm-form-control" />
                    </div>

                    <input type="hidden" name="prefix" value="template-contactform-">

                </form>

            </div>

        </div>

    </div>



</section><!-- #content end -->


@endsection
