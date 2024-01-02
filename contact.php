
<?php


//server connection
//$conn = mysqli_connect("localhost","gnoin","Gnoin2023","gnoin");


// Create connection
$conn = mysqli_connect("localhost","root","","gnoin");

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = "";
$email = "";
$subject = "";
$message = "";


// Check if the form has been submitted
if(isset($_POST["submit"]))
{
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // $query = "INSERT INTO `connect`(`id`, `name`, `email`, `discussion`) VALUES ('','$name','$email','$reason')";
$query = "INSERT INTO contact(id, name, email, subject, message) VALUES ('','$name','$email','$subject','$message')";
mysqli_query($conn,$query);

// $reload = true;
}





// Close the database connection
$conn->close();
?>






  <?php include "header.php"; ?>


        <!-- header end -->


        <!-- header part end -->
        <!-- baner parts start -->
        <section class="inner-banner">
            <div class="container">
                <div class="inner-banner__content-wrap">
                    <h2 class="text-light">Welcome To Gnoin Pvt. Ltd.</h2>
                    <p class="text-light">Believe in vibrant minds, smart ideas and coordinated
                        change.</p>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- bannaer end -->

        <section class="container mt-5">
            <!--Contact heading-->
            <div class="row">
                <!--Grid column-->
                <div class="col-sm-12 mb-4 col-md-5">
                    <!--Form with header-->
                    <div class="card border-0   text-center py-2">
                        <div class=" border-0 p-3">
                            <h1 class=" ">Let's Make A Wonderful Relationship</h1>
                        </div>
                        <div class="card-body p-3">

                            <p class="text-justify">Join us today and let us help you create that next great project of
                                yours. There are several simple ways to connect with us. Talk to us personally.</p>


                            <p ><a class="thm-btn" href="tel:+91-9888337791"><span>Call
                                Us Now</span></a> </p>
                            <p ><a class="thm-btn" href="mailto:Info@Gnoin.Com"><span>Drop an Email</span></a></p>

                        </div>

                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-sm-12 col-md-7 mb-4">
                    <!--Google map-->
                    <div class="card  rounded-0 bg-primary text-white text-center py-2">
                        <div class=" p-3">
                              <div class="d-flex flex-column justify-content-center align-items-start ">
                                
                                <h5 class="ml-2">Gnoin Private Limited</h5>
                                
                                <p class="text-light ">Best Website Design, Software Development and Digital Marketing Company Kolkata</p>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-start ">
                                <h5 class="ml-2">Address

                                </h5>
                                <p class="text-light ">Astra Towers, ASO 432, 4th Floor, South Block, Action Area 2C,<br> New
                                    Town, Rajarhat, Kolkata, West Bengal - 700161</p>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-start ">
                                <h5 class="ml-2">Phone

                                </h5>
                                <div class="d-flex  justify-content-between">
                                    <p><a class="text-light" href="tel:+91-9888337791">+91-9888337791</a></p>
                                    <p class="ml-4"><a class="text-light" href="tel:+91-33-48040710">+91-33-48040710</a>
                                    </p>
                                </div>

                                
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-start ">
                                <h5 class="ml-2">Email

                                </h5>
                                <div class="d-flex  justify-content-between">
                                    <p><a class="text-light"  href="mailto:Info@Gnoin.Com">Info@gnoin.Com</a></p>
                                    <p class="ml-4"><a class="text-light" href="sales@gnoin.com">sales@gnoin.com</a>
                                    </p>
                                </div>
                               

                                
                            </div>
                            <div class="contact-info-one__social">
                                <a style="font-size: 30px;" target="_blank" href="https://www.facebook.com/profile.php?id=100076309744920"><i class="fa fa-facebook-f"></i></a>
                                <a style="font-size: 30px;" href="#"><i class="fa fa-twitter"></i></a>
                                <a style="font-size: 30px;" href="skype:live:.cid.286e5ab446856971"><i class="fa fa-skype"></i></a>
                                <a style="font-size: 30px;" target="_blank" href="https://www.linkedin.com/company/gnoin-private-limited/?viewAsMember=true"><i class="fa fa-linkedin"></i></a>
                            </div>

                        </div>
                        
                    </div>

                </div>
                <!--Grid column-->
            </div>
        </section>
        
      
        <!-- location part end -->

        <!-- form part start -->
        <!-- <form id="my_form" action="<?php echo $baseUrl ?>contactus" method="POST"> -->
        <form id="my_form" action="" method="POST">
           <section class="container mt-5">
             <!--Contact heading-->
              <div class="row">
                <!--Grid column-->
                  <div class="col-sm-12 mb-4 col-md-5">
                    <!--Form with header-->
                      <div class="card border-primary rounded-0">
                         <div class="card-header p-0">
                             <div class="bg-primary text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                                <p class="m-0">We’ll write rarely, but only the best content.</p>
                            </div>
                         </div>
                         <div class="card-body p-3">

                             <div class="form-group">
                                 <label> Your name </label>
                                 <div class="input-group">
                                     <input value="" type="text" name="name" class="form-control"
                                         placeholder="Your name">
                                 </div>
                             </div>
                             <div class="form-group">
                                <label>Your email</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="email" value="" name="email" class="form-control"
                                          placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" name="subject" class="form-control"
                                          placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" class="form-control" name="message">
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="submit" value="submit"
                                    class="btn btn-primary btn-block rounded-0 py-2">
                            </div>

                        </div>

                     </div>
                 </div>
                <!--Grid column-->

                <!--Grid column-->
                 <div class="col-sm-12 col-md-7">
                    <!--Google map-->
                     <div class="mb-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3682.86680431503!2d88.46258566418778!3d22.621448536878486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAstra%20Towers%2C%20ASO%20718%20South%20Block%2C%20Action%20Area%202C%2C%20New%20Town%2C%20Rajarhat%2C%20Kolkata%2C%20West%20Bengal%20-%20700161!5e0!3m2!1sen!2sin!4v1672747048977!5m2!1sen!2sin"
                            width="100%" height="450"  allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                     <!--Buttons-->
                     <div class="row text-center">
                         <div class="col-md-4">
                             <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i
                                    class="fa fa-map-marker"></i></a>
                             <p> Gnoin Pvt. Ltd.</p>
                         </div>
                         <div class="col-md-4">
                             <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i
                                    class="fa fa-phone"></i></a>
                             <p>+91-33-48040710</p>
                         </div>
                         <div class="col-md-4">
                             <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i
                                    class="fa fa-envelope"></i></a>
                             <p> Info@Gnoin.Com</p>
                          </div>
                      </div>
                  </div>
                <!--Grid column-->
              </div>
           </section>
         </form>
        <!-- form part end -->


        <script>
    // Add an event listener to the form's submit event
    document.getElementById("my_form").addEventListener("submit", function (e) {
        // Check if the required fields are empty
        if (!document.querySelector('input[name="name"]').value || !document.querySelector('input[name="email"]').value || !document.querySelector('input[name="subject"]').value || !document.querySelector('input[name="message"]').value) {
            alert("Please fill in all required fields.");
            e.preventDefault(); // Prevent form submission
        } else {
            // Display a success message
            alert("Data submitted successfully.");

             // Reload the page
             location.reload();

            // Prevent the page from reloading
            e.preventDefault();
        }
    });
</script>






        <section class="cta-one">
            <div class="container text-center">
                <h3 class="cta-one__title">We will respond to all your inquiries via the Contact Us form, within 1
                    business day. Your privacy is on our top priority! Your details will never be shared with anyone for
                    marketing purposes.</h3><!-- /.cta-one__title -->

            </div><!-- /.container -->
        </section><!-- /.cta-one -->







    </div><!-- /.page-wrapper -->


      <?php include("footer.php"); ?>