


        <!-- ---------------------header section----------------------------------------->
            <?php

include("header.php");
?>


        <!-- inerpage page top container  -->
        <section class="inner-banner">
            <div class="container">
                <div class="inner-banner__content-wrap">
                    <h2 class="text-light">Request a Quote
                    </h2>
                    <p>Fill out the details we will get back to you within the next 24 hours with the complete technical
                        scope of work.</p>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="contact.html">Page</a></li>
                    </ul>
                </div>
            </div>
        </section>











        <!-- START CONTACT SECTION -->

        <section class="zzz" >  
            <!-- style="background: rgb(85, 56, 244);" -->

            <div class="container" >
                <div class="section-contact">
                    <div class="row row1 justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <div class="header-section text-center">
                                <h1 class="title text-primary">Let´s Connect
                                    <span class="dot"></span>
                                    <span class="big-title">Connect</span>
                                </h1>
                                <h5 class="text-muted">Come visit us, call us, write us an email or fill in below.</h5>
                                <p>We are passionate about what we do and that is why we strive to ensure high quality
                                    of the custom software solutions we develop</p>

                            </div>
                        </div>
                    </div>
                    <div class="form-contact">
                        <div class="col-lg-7 d-block m-auto contact-form__wrapper p-md-3 p-lg-4 p-xl-5 order-lg-1">
                            <form action="#" class="contact-form form-validate" novalidate="novalidate">
                                <div class="row ">
                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <label class="required-field" for="Name">Full Name </label>
                                            <input type="text" class="form-control" id="Name" name="Full Name"
                                                placeholder="Full Name ">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <label for="Email">Email Id</label>
                                            <input type="text" class="form-control" id="Email" name="Email Id"
                                                placeholder="Email Id">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <label class="required-field" for="phone">Phone</label>

                                            <div class="d-flex">
                                                <select class="w-28 " name="countryCode" id="">
                                                    <option data-countryCode="GB" value="44" Selected>(+91)</option>
                                                    <option data-countryCode="US" value="1">(+44)</option>
                                                    <optgroup label="Other countries">
                                                        <option data-countryCode="US" value="1">(+44)</option>
                                                        <option data-countryCode="DZ" value="213">(+213)</option>
                                                        <option data-countryCode="AD" value="376">(+376)</option>
                                                        <option data-countryCode="AO" value="244">(+244)</option>
                                                        <option data-countryCode="AI" value="1264">(+1264)</option>
                                                        <option data-countryCode="AG" value="1268"> (+1268)</option>
                                                        <option data-countryCode="AR" value="54">(+54)</option>
                                                        <option data-countryCode="AM" value="374">(+374)</option>
                                                        <option data-countryCode="AW" value="297">(+297)</option>
                                                        <option data-countryCode="AU" value="61">(+61)</option>
                                                        <option data-countryCode="AT" value="43">(+43)</option>

                                                    </optgroup>
                                                </select>

                                                <input type="text" class="form-control" id="Phone" name="Phone"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <label for="Company">Company</label>
                                            <input type="text" class="form-control " id="Company" name="Company"
                                                placeholder="Company (Optional)">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="form-group">
                                            <label class="required-field" for="File">Upload File</label>
                                            <input type="file" class=" " id="File" name="File"
                                                placeholder="Choose File">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <h5>Estimate</h5>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    USD
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    INR
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="form-group">
                                            <label class="required-field" for="Project ">Project Brief ?</label>
                                            <textarea class="form-control" id="Project " name="Project " rows="4"
                                                placeholder="Project Brief"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 ">
                                        <button type="submit" name="submit" class="btn btn-primary">submit</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / END CONTACT SECTION -->

        </section>


        <!-- ___________Engagement practice start_________________ -->


        <?php

include("engagementmodel.php");
?>


















        <!-- footer start -->
        <!-------------------------- Footer Page Include ----------------- -->
            <?php

include("footer.php");
?>

        <!-- footer end -->





        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <?php

include("footer.php");
?>