<section id="slider" class="slider-element"
style="background: url('{{asset('222.jpeg')}}') center center no-repeat; background-size: cover; height: 916px">
<div class="vertical-middle">
    <div class="container">
        <div class="row py-5">
            <div class="col-xl-6 col-lg-5 col-md-2"></div>
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="slider-title dark">
                    <h1 class="text-primary">Busy in Work Life?<br> Don't have Enough Time for Cleaning?
                    </h1>
                    <p class="text-dark bg-white rounded p-2">Introducing our exceptional cleaning service, where cleanliness meets perfection. We understand that a clean and organized space is vital for your well-being and productivity. With our team of highly skilled and dedicated professionals,
                         we strive to provide you with an immaculate environment that exceeds your expectations.</p>
                </div>
                <div class="card border-0 p-3 shadow-lg" style="background-color: rgba(255,255,255,0.85)">
                    <div class=" card-body" data-alert-type="inline">

                        <form  action={{route('contact.request')}} method="post"
                                        class="row form-cleaning mb-0" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-process">
                                            <div class="form-cleaning-loader css3-spinner" style="position: absolute;">
                                                <div class="css3-spinner-double-bounce1"></div>
                                                <div class="css3-spinner-double-bounce2"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group form-group">
                                                <span class="input-group-text bg-color text-white"><img
                                                        src="{{ asset('frontend/demos/cleaner/images/icons/cleaner2.svg') }}"
                                                        alt="" width="20"></span>
                                                <select class="required form-select" name="cleaning_service"
                                                required>
                                                    <option value="Select Your Service" disabled selected>-- Select Your Service --
                                                    </option>
                                                    <option value="Home Cleaning">Home Cleaning</option>
                                                    <option value="Office Cleaning">Office Cleaning</option>
                                                    <option value="Window Cleaning">Window Cleaning</option>
                                                    <option value="Garden Maintenance">Garden Maintenance</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group form-group">
                                                <span class="input-group-text bg-color text-white"><i
                                                        class="icon-line2-map"></i></span>
                                                <input type="text" name="location"
                                                    class="form-control required" value="" placeholder="Location"required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group form-group">
                                                <span class="input-group-text bg-color text-white"><i
                                                        class="icon-line2-calendar"></i></span>
                                                <input type="text"
                                                    class="form-control cleaning-date datetimepicker-input required"
                                                    name="clean_date"
                                                    value="Select your Date & Time"required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group input-group">
                                                <span class="input-group-text bg-color text-white"><i
                                                        class="icon-line2-layers"></i></span>
                                                <input type="number" name="cleaning_area_sq_ft" min=""
                                                   class="form-control required" value=""
                                                    placeholder="Area (sqft.)"required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group form-group">
                                                <span class="input-group-text bg-color text-white"><i
                                                        class="icon-line2-envelope-letter"></i></span>
                                                <input type="email" name="email"
                                                    class="form-control required" value=""
                                                    placeholder="Your Email"required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group form-group">
                                                <span class="input-group-text bg-color text-white"><i
                                                        class="icon-line2-call-out"></i></span>
                                                <input type="text" name="contact_no"
                                                    class="form-control required" value=""
                                                    placeholder="Contact Number"required>
                                            </div>
                                        </div>


                                        <input type="hidden" name="type" value=2>



                                        <div class="col-12">
                                            <button type="submit" name="form-cleaning-submit"
                                                class="btn btn-lg bg-color text-white fw-semibold w-100 mt-2">Book
                                                Now</button>
                                        </div>

                                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="svg-separator">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2273 390" fill="#FFF">
            <path d="M0,211.28s373-254,1119-205,765,173,1154,0v384H0Z" />
        </svg>
    </div>
</div>
</section>
