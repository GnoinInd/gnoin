<?php


//server connection
// $conn = mysqli_connect("localhost","root","","gnoin");
$conn = mysqli_connect("localhost","gnoin","Gnoin2023","gnoin");


// Create connection
//$conn = mysqli_connect("localhost","root","","gnoin");

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $email = "";
// $ipAddress = "";



// Check if the form has been submitted
if(isset($_POST["submit"]))
{
    
    $ipAddress = $_SERVER["REMOTE_ADDR"];
    $email = $_POST["Email"];
    // $query = "INSERT INTO `connect`(`id`, `name`, `email`, `discussion`) VALUES ('','$name','$email','$reason')";
    // $query = "INSERT INTO subscribe( email, ip) VALUES ('$email','$ipAddress')";
    // mysqli_query($conn,$query);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Insert data into the 'subscribe' table
        $query = "INSERT INTO subscribe (email, ip) VALUES ('$email', '$ipAddress')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // echo "Data inserted successfully!";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Invalid email address!";
    }

// $reload = true;
}





// Close the database connection
$conn->close();
?>

<?php 
include("header.php");
?>




<div class="banner-one g-0  banner_section ">

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000"
        data-pause="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-md-block carousel_slide_1"></div>
                <img src="gnoinv1/images/banner/bannerimg.png" class="d-block w-100 rounded-0" alt="..."
                    class="img-fluid">
                <div class="overlay_cover"></div>
                <div class="carousel-caption d-md-block">
                    <h5 class="new_banner_title">Software <br> <span class="text-outline-heading">Development</span><br>
                        Services
                    </h5>
                    <p class="new_banner_txtColor mt-3 mb-3 ">
                        Transforming industries with
                        AI-Powered Custom Software Solutions
                    </p>
                    <div class="caraousel_btn mt-4">
                        <a href="contact.php" class="btn-custom ">Let's Start Talk</a>
                    </div>

                </div>

            </div>
            <div class="carousel-item ">

                <div class="d-md-block  carousel_bg_shape"></div>
                <img src="gnoinv1/images/banner/banner2.png" class="d-block w-100 rounded-0" alt="..."
                    class="img-fluid">
                <div class="overlay_cover"></div>
                <div class="carousel-caption d-md-block">
                    <h5 class="new_banner_title ">We are the makers <br> <span class="text-outline-heading"> of
                            awesome</span> <br> business process
                    </h5>
                    <p class="new_banner_txtColor mt-3 mb-3">Turn your
                        idea into
                        extraordinary, Web and Mobile Apps with Gnoin.</p>

                    <div class="caraousel_btn mt-4">
                        <a href="contact.php" class="btn-custom ">Let's Start Talk</a>
                    </div>

                </div>

            </div>

            <div class="carousel-item">
                <div class="d-md-block carousel_slide_3"></div>
                <img src="gnoinv1/images/banner/banner3.jpeg" class="d-block w-100 rounded-0" alt="..."
                    class="img-fluid">
                <!-- <div class="overlay_cover"></div> -->
                <div class="carousel-caption d-md-block">
                    <h5 class="new_banner_title">Building Trust in <br> <span
                            class="text-outline-heading">Interorganizational </span><br> Collaboration
                    </h5>

                    <p class="new_banner_txtColor mt-3 mb-3">Globally
                        available software, Web & app development company technocrat approach to help you carve out
                        better futuristic solutions.</p>

                    <div class="caraousel_btn mt-4">
                        <a href="contact.php" class="btn-custom ">Let's Start Talk</a>
                    </div>

                </div>

            </div>

            <div class="carousel-item">
                <div class="d-md-block carousel_slide_3"></div>
                <img src="gnoinv1/images/banner/banner5.jpg" class="d-block w-100 rounded-0" alt="..."
                    class="img-fluid">
                <!-- <div class="overlay_cover"></div> -->
                <div class="carousel-caption d-md-block">
                    <h5 class="new_banner_title">Join us to <br> <span class="text-outline-heading">transform your
                        </span><br> dreams digitally!
                    </h5>

                    <p class="new_banner_txtColor mt-3 mb-3">Our company
                        name reflects our
                        service, our service reflects our identity, this is all about</p>
                    <div class="caraousel_btn mt-4">
                        <a href="contact.php" class="btn-custom ">Let's Start Talk</a>
                    </div>

                </div>

            </div>

            <div class="carousel-item">
                <div class="d-md-block carousel_slide_3"></div>
                <img src="gnoinv1/images/banner/banner4.jpg" class="d-block w-100 rounded-0" alt="..."
                    class="img-fluid">

                <div class="carousel-caption d-md-block">
                    <h5 class="new_banner_title">We Combine Design and <br> <span
                            class="text-outline-heading">Technology To Solve </span><br> Real Customer Problems
                    </h5>

                    <p class="new_banner_txtColor mt-3 mb-3">We will help
                        you to improve
                        the quality of your products by helping you overcome any technical challanges to ensure your
                        software's long-term health.
                    </p>
                    <div class="caraousel_btn mt-4">
                        <a href="contact.php" class="btn-custom ">Let's Start Talk</a>
                    </div>

                </div>

            </div>


        </div>

    </div>


</div>




<div class="container-fluid p-0 g-0 ">
    <div class="busenns-wraper position-relative">
        <div class="section_image w-75 h-100">
            <img src="gnoinv1/images/banner/softdevandit.png" alt="" class="img-fluid h-100 rounded-0 w-100">

            <div class="col-3 ps-0">
                <div class="section_bg_colr">

                </div>
            </div>

            <div class="card custom_card_design ">
                <div class="card-body ">
                    <h5 class="card-title">Grow your business</h5>
                    <h6 class="card-subtitle card-subtitle_initial mb-2 text-body-secondary">Software Development & IT
                        Consulting Company In India</h6>
                    <h6 class="card-subtitle card-secondary mb-2 text-body-secondary">Industry Experience To Address
                        Your Challenges.</h6>

                    <p class="card-text">Gnoin Pvt. Ltd. is a global web and mobile app development company. We partner
                        with customers of all sizes to build highly innovative solutions, customizations and products
                        across technology platforms by leveraging cutting edge technologies.</p>
                    <p class="card-text"> We provide high end technology solutions to help businesses realize their
                        maximum potential.</p>

                    <div class="cardbtn d-flex justify-content-start align-items-center">
                        <p class="hover-underline-animation"><a href="about.php" class="card-link">Read More</a></p>


                        <div class="btnarrowimg d-flex justify-content-center align-items-center">
                            <img src="gnoinv1/images/icon/arrowicon.png" alt="" class="img-fluid m-2 ">
                        </div>


                    </div>

                    <!-- <span class="arrow-right"></span> -->



                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid g-0">
    <section class="container mt-5 indsutry_exp_cont" id="demos">
        <div class="row ">
            <div class="col-12">
                <p class="text-center industry_exp_heading">
                    Industry Experience To Address Your Challenges
                </p>
                <p class=" text-center indust_exp_subheading">
                    With Every New Day A New Set Of Technology Knocks Out On The Market Door
                </p>
            </div>
            <div class="col-12  mt-3 ">
                <div class="owl-carousel owl-carousel-1 owl-theme">
                    <div class="item_1 position-relative">
                        <div class="rectangle_bg"></div>
                        <div class="indsutry_exp_section">
                            <p class="text-center font-weight-bold">Industries</p>
                        </div>
                        <div class="overlay">

                            <div class="card_content_ind_exp">
                                <h5 class="text-center font-weight-bolder text-white">Industries</h5>
                                <p class="text-white">
                                    We offer a variety of engagement and hiring models, so we can meet our objectives
                                    for a
                                    variety of businesses, from startups that are in the planning stage, to businesses
                                    serving
                                    millions of users.

                                </p>

                                <a class="text-white" href="#">Read more</a>
                            </div>

                        </div>

                    </div>
                    <div class="item_1 position-relative">
                        <div class="rectangle_bg"></div>
                        <div class="indsutry_exp_section">
                            <p class="text-center font-weight-bold">Privacy Policy</p>
                        </div>
                        <div class="overlay">

                            <div class="card_content_ind_exp">
                                <h5 class="text-center font-weight-bolder text-white">Privacy Policy</h5>
                                <p class="text-white">

                                    Build Gnoin into a leading IT Services company by driving continuous improvement,
                                    adopting
                                    cutting edge technologies and focusing on value addition for our customers.

                                </p>

                                <a class="text-white" href="#">Read more</a>
                            </div>

                        </div>
                    </div>
                    <div class="item_3 position-relative">
                        <div class="rectangle_bg"></div>
                        <div class="indsutry_exp_section">
                            <p class="card_listings text-center">
                                Quick Links
                            </p>
                            <ul>
                                <li><a href="healthcare.php">Health Care</a></li>
                                <li><a href="privacy-policy.php">Privacy &amp; Policy</a></li>
                                <li><a href="Retail.php">Retail &amp; Ecommerce</a></li>
                                <li><a href="politicalCompaigns.php">Political Compaigns</a></li>
                                <li><a href="duction-learnig.php">Education &amp; E-Learnin</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="item_1 position-relative">
                        <div class="rectangle_bg"></div>
                        <div class="indsutry_exp_section">
                            <p class="text-center font-weight-bold">Web Application Development</p>
                        </div>
                        <div class="overlay">

                            <div class="card_content_ind_exp">
                                <h5 class="text-center font-weight-bolder text-white">Web Application Development</h5>
                                <p class="text-white">
                                    We execute a strategic analysis for each project we receive to ensure that we
                                    achieve all
                                    requirements, and the final product solves our customer's issues, meets their
                                    expectations.
                                </p>

                                <a class="text-white" href="#">Read more</a>
                            </div>

                        </div>

                    </div>
                    <div class="item_1 position-relative">
                        <div class="rectangle_bg"></div>
                        <div class="indsutry_exp_section">
                            <p class="text-center font-weight-bold">Cross Application Development</p>
                        </div>

                        <div class="overlay">

                            <div class="card_content_ind_exp card_content_ind_expres">
                                <h5 class="text-center font-weight-bolder text-white">Cross Application Development</h5>
                                <p class="text-white">
                                    Let's create custom solutions to help your organization become more efficient, with
                                    improved
                                    operational efficiencies. We provide powerful unique software solutions for large
                                    and medium sized businesses - fast and
                                    with the closest attention to quality, ROI and your users.
                                </p>

                                <a class="text-white" href="#">Read more</a>
                            </div>

                        </div>
                    </div>
                    <div class="item_3 position-relative">
                        <div class="rectangle_bg"></div>
                        <div class="indsutry_exp_section">
                            <p class="card_listings text-center">
                                Quick Links
                            </p>
                            <ul>
                                <li><a href="java.php"></a>Java </li>
                                <li><a href="laravel.php">Laravel</a></li>
                                <li><a href="Mac-App-Development.php">Mac Application</a></li>
                                <li><a href="php.php">PHP</a></li>
                                <li><a href="node.php">Node</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="item_1 position-relative">
                        <div class="rectangle_bg"></div>
                        <div class="indsutry_exp_section">
                            <p class="text-center font-weight-bold">UI/UX Development</p>
                        </div>
                        <div class="overlay">

                            <div class="card_content_ind_exp card_content_ind_expres">
                                <h5 class="text-center font-weight-bolder text-white">UI/UX Development</h5>
                                <p class="text-white">
                                    Gnoin is one of the best UX/UI service providers globally, specializing in creating
                                    beautiful UI/UX designs that express our client's exact vision and goals. With the
                                    years of experience and updated knowledge,
                                    we provide user-friendly apps and sites to our clients with the intention of
                                    enriching the experience of our clients.
                                </p>

                                <a class="text-white" href="about.php">Read more</a>
                            </div>

                        </div>
                    </div>

                </div>





                <script>
                $(document).ready(function() {
                    var owl1 = $('.owl-carousel-1');
                    owl1.owlCarousel({
                        loop: true,
                        nav: false,
                        margin: 20,
                        autoplay: true,
                        autoplayTimeout: 1000,
                        autoplayHoverPause: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 2
                            },
                            1000: {
                                items: 3
                            }
                        }
                    });
                });
                </script>
            </div>
        </div>
    </section>
</div>

<div class="container-fluid g-0 dirc_section   mt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 mb-5">
                <p class="dirc_heading">We Deliver Innovative, Reliable And Creative Services</p>

                <div class="dirc_icons_listings ">
                    <div class="d-flex justify-content-center align-items-center dirc_icons">
                        <div class="dircicon1">
                            <img src="gnoinv1/images/icon/dircicon1.png" alt="" class="img-fluid">
                        </div>
                        <div class="dircicon2">
                            <img src="gnoinv1/images/icon/dircicon2.png" alt="" class="img-fluid">
                        </div>
                        <div class="dircicon3">
                            <img src="gnoinv1/images/icon/dircicon3.png" alt="" class="img-fluid">
                        </div>
                        <div class="dircicon4">
                            <img src="gnoinv1/images/icon/dircicon4.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                <p class="dirc_subheading">Clearing tech barriers, creating impactful solutions for your business.
                    Globally oriented, we transform brands with a humanistic approach. Your top-tier service
                    provider.</p>
            </div>

            <div class="col-md-5 col-sm-12 resp_width">
                <p class="dirc_second_heading">WHO WE ARE?</p>
                <P class="dirc_second_subheading">Business Chalenges Solved With Digital Technology.</P>
                <P class="dirc_second_paraheading">Gnoin Pvt. Ltd: Navigate challenges with integrated tech
                    solutions. Harnessing cutting-edge technology, we drive customer growth through data-driven
                    solutions across various sectors.</P>
                <div class="cardbtn d-flex justify-content-start align-items-center">
                    <p class="hover-underline-animation m-0"><a href="about.php" class="card-link">Read More</a></p>


                    <div class="btnarrowimg d-flex justify-content-center align-items-center">
                        <img src="gnoinv1/images/icon/arrowicon.png" alt="" class="img-fluid m-2 ">
                    </div>


                </div>
            </div>
            <div class="col-md-7 col-sm-12 d-none d-sm-none d-lg-block d-xl-block">
                <div class="position-relative">
                    <div class="dircimg1">
                        <img src="gnoinv1/images/dirc1.png" alt="" class="img-fluid">
                    </div>
                    <div class="dircimg2">
                        <img src="gnoinv1/images/dirc2.png" alt="" class="img-fluid">
                    </div>
                    <div class="dircimg3">
                        <img src="gnoinv1/images/dirc3.png" alt="" class="img-fluid">
                    </div>
                </div>

            </div>


        </div>
    </div>

</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12  d-block d-md-none">
            <div class="row ">
                <div class="col-4 p-0 d-flex justify-content-center">
                    <div class="dircimg">
                        <img src="gnoinv1/images/dirc1.png" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-4 p-0 d-flex justify-content-center">
                    <div class="dircimg">
                        <img src="gnoinv1/images/dirc2.png" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-4 p-0 d-flex justify-content-center">
                    <div class="dircimg">
                        <img src="gnoinv1/images/dirc3.png" alt="" class="img-fluid">
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--Global Solutions, Local Services-->
<!--

<div class="container-fluid countersection py-5">
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-12 text-center">
                <p class="conterheading font-weight-bold mb-5">Global Solutions, Local Services
                <p>
            </div>
            <div class="col-12 about-us-map-us ">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <div class="row">
                        <div class="col-xs-12 col-sm-4  margin-bottom-30 counter-align" id="counter1-container">
                            <div class="info-sec-counter">
                                <img src="gnoinv1/images/icon/globalsolutions1.png" alt="" class="img-fluid">
                                <div class="display-inline counter-2" id="counter1" data-count="14">0</div>
                                <div class="display-inline font-weight-bold ">+</div>
                            </div>
                            <div class="informative-sec  display-inline margin-top-45">Strategic Locations</div>
                        </div>


                        <div class="col-xs-12 col-sm-4 margin-bottom-30 counter-align" id="counter2-container">
                            <div class="info-sec-counter">
                                <img src="gnoinv1/images/icon/globalsolutions2.png" alt="jjjjjjj" class="img-fluid">
                                <div class="display-inline counter-2" id="counter2" data-count="2800">0</div>
                                <div class="display-inline font-weight-bold ">+</div>
                            </div>
                            <div class="informative-sec font-bold display-inline margin-top-45">Dedicated Developers
                            </div>
                        </div>



                        <div class="col-xs-12 col-sm-4 margin-bottom-30 counter-align wow zoomIn">
                            <div class="info-sec-counter">
                                <img src="gnoinv1/images/icon/globalsolutions3.png" alt="jjjjjjj" class="img-fluid">
                                <div class="display-inline counter-2" id="counter3" data-count="20000">0</div>
                                <div class="display-inline">+</div>
                            </div>
                            <div class="informative-sec font-bold display-inline margin-top-45">Custom Apps </div>
                        </div>

                        <div class="clearfix margin-bottom-50"></div>
                        <div class="col-xs-12 col-sm-4 margin-bottom-30 counter-align wow zoomIn">
                            <div class="info-sec-counter">
                                <img src="gnoinv1/images/icon/globalsolutions4.png" alt="jjjjjjj" class="img-fluid">
                                <div class="display-inline counter-2" id="counter4" data-count-slow="40">0</div>
                                <div class="display-inline">+</div>
                            </div>
                            <div class="informative-sec font-bold display-inline margin-top-45">Specialized Industries
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 margin-bottom-30 counter-align wow zoomIn">
                            <div class="info-sec-counter">
                                <img src="gnoinv1/images/icon/globalsolutions5.png" alt="jjjjjjj" class="img-fluid">
                                <div class="display-inline counter-2" id="counter5" data-count="7000">0</div>
                                <div class="display-inline">+</div>
                            </div>
                            <div class="informative-sec font-bold display-inline margin-top-45">Global Customers </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 margin-bottom-30 counter-align wow zoomIn">
                            <div class="info-sec-counter">
                                <img src="gnoinv1/images/icon/globalsolutions6.png" alt="jjjjjjj" class="img-fluid">
                                <div class="display-inline counter-2" id="counter6" data-count="150">0</div>
                                <div class="display-inline">+</div>
                            </div>
                            <div class="informative-sec font-bold display-inline margin-top-45">Development Awards
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="cardbtn d-flex justify-content-start align-items-center">
                    <p class="hover-underline-animation m-0"><a href="about.php" class="card-link">Read More</a></p>


                    <div class="btnarrowimg d-flex justify-content-center align-items-center">
                        <img src="gnoinv1/images/icon/arrowicon.png" alt="" class="img-fluid m-2 ">
                    </div>


                </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                    <div class="countersection_img">
                    <img src="gnoinv1/images/globalsolutions.png" alt="" class="img-fluid">
                </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
-->
<!-- end Global Solutions, Local Services-->
<div class="container-fluid g-0 p-0">
    <div class="busenns-wraper_2 position-relative">
        <div class="section_image w-75 h-100">
            <img src="gnoinv1/images/technologyleverage.png" alt="" class="img-fluid h-100 rounded-0 w-100">
            <div class="card custom_card_design2 ">
                <div class="card-body">
                    <h5 class="card-title techno_leverage">Technologies Leverage</h5>
                    <h6 class="card-subtitle card-subtitle_initial mb-2 text-body-secondary techno_leverage_subheading">
                        Perfect Blend Of
                        Superlative IT Services With Highly Functional Technology.</h6>
                    <p class="card-text">We work on wide range of tools and technologies to meet client business
                        requirement for existing project or new application.</p>

                    <div class="cardbtn d-flex justify-content-start align-items-center">
                        <p class="hover-underline-animation m-0"><a href="about.php" class="card-link text-white">Read
                                More</a></p>


                        <div class="btnarrowimg d-flex justify-content-center align-items-center">
                            <img src="gnoinv1/images/icon/arrowicon.png" alt="" class="img-fluid m-2 ">
                        </div>


                    </div>
                    <div class="owl-carousel  owl-carousel-2 owl-theme ">
                        <div class="item_1" title="Angular">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/angular.png">
                            </div>
                        </div>
                        <div class="item_1" title="Node">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/node.png">
                            </div>

                        </div>
                        <div class="item_1" title="Java">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/java.png">
                            </div>
                        </div>
                        <div class="item_1" title="mySQL">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/sharp.png">
                            </div>
                        </div>
                        <div class="item_1" title="ReactJS">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/react.png">
                            </div>
                        </div>
                        <div class="item_1" title="Php">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/php.png">
                            </div>
                        </div>
                        <div class="item_1" title="Cloud">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/cloud.png">
                            </div>
                        </div>
                        <div class="item_1" title="Artificial intelligence">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/ai.png">
                            </div>
                        </div>
                        <div class="item_1" title="MongoDB">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/mongodb.png">
                            </div>
                        </div>
                        <div class="item_1" title="Node">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/node.png">
                            </div>

                        </div>
                        <div class="item_1" title="Php">
                            <div class="group-5">
                                <img class="logo-nav" src="gnoinv1/images/icon/php.png">
                            </div>
                        </div>






                    </div>





                    <script>
                    $(document).ready(function() {
                        var owl2 = $('.owl-carousel-2');


                        if (owl2.length) {
                            owl2.owlCarousel({
                                items: 9,
                                nav: true,
                                dots: false,
                                loop: true,
                                margin: 0,
                                autoplay: true,
                                autoplayTimeout: 1000,
                                autoplayHoverPause: true,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    300: {
                                        items: 3
                                    },
                                    400: {
                                        items: 4
                                    },
                                    600: {
                                        items: 5
                                    },
                                    1000: {
                                        items: 9
                                    }
                                }
                            });


                        }
                    });
                    </script>


                </div>
            </div>
        </div>
    </div>
</div>





<div class="container our_delivery_model mt-5">
    <div class="row">
        <div class="col-12 mb-3">
            <p class="our_delivery_model_heading">Our Organization's Delivery Models</p>
            <p class="our_delivery_model_subheading">Power To Influence Industry Expertise</p>
            <p class="our_delivery_modelPara">With an aim to deliver excellence at every step we take, we blend
                traditional and modern methods with unique ways of developing outstanding solutions. We work with a
                vision to leave a lasting impression with services that stand out.</p>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card-header py-5 ">


                            <div class="rounded px-1 ">
                                <img src="gnoinv1/images/icon/Fixed-Cost-Model0.png" alt="...">
                            </div>
                            <div class=" text-center  ">Offsite Delivery Model</div>

                        </div>
                    </div>
                    <div class="flip-card-back our_deliver_model_2">
                        <div class="card-header card_header_back ">

                            <div class="text-center">Offshore Delivery Model</div>
                            <div class="rounded px-1  float-end ">

                                <img src="gnoinv1/images/icon/Fixed-Cost-Model 1.png" alt="..." class="img-fluid">
                            </div>

                        </div>
                        <div class="card-body mt-2 p-2">
                            <p class=" text-center text-white">Enable customers to take advantage of dedicated or
                                on-demand
                                skilled resources.</p>
                            <a href="#" class="btn btn-flipcard">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card-header py-5 ">


                            <div class="rounded px-1 ">
                                <img src="gnoinv1/images/icon/Fixed-Cost-Model3.png" alt="...">
                            </div>
                            <div class=" text-center  ">Onsite Delivery Model</div>

                        </div>
                        
                    </div>
                    <div class="flip-card-back our_deliver_model_4">
                        <div class="card-header card_header_back ">

                            <div class="text-center text-white">Onsite Delivery Model</div>
                            <div class="rounded px-1  float-end ">

                                <img src="gnoinv1/images/icon/Fixed-Cost-Model 1.png" alt="..." class="img-fluid">
                            </div>

                        </div>
                        <div class="card-body mt-2 p-2">
                            <p class=" text-center text-white">
                                Skilled team working onsite to develop product or solution
                                at customer point.
                            </p>
                            <a href="#" class="btn btn-flipcard">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card-header py-5 ">


                            <div class="rounded px-1 ">
                                <img src="gnoinv1/images/icon/Fixed-Cost-Model7.png" alt="...">
                            </div>
                            <div class=" text-center ">Offshore Delivery Model</div>

                        </div>
                        
                    </div>
                    <div class="flip-card-back our_deliver_model_3">

                        <div class="card-header card_header_back ">

                            <div class="text-center ">Offshore Delivery Model</div>
                            <div class="rounded px-1  float-end ">

                                <img src="gnoinv1/images/icon/Fixed-Cost-Model 1.png" alt="..." class="img-fluid">
                            </div>

                        </div>
                        <div class="card-body mt-2 p-2">
                            <p class=" text-center text-white">Provide advantages to clients in need of an extended team in
                                        an offshore development center.</p>
                            <a href="#" class="btn btn-flipcard">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card-header py-5 ">


                            <div class="rounded px-1 ">
                                <img src="gnoinv1/images/icon/Fixed-Cost-Model5.png" alt="...">
                            </div>
                            <div class=" text-center">Offsite/Offshore Delivery Model</div>

                        </div>
                        
                    </div>
                    <div class="flip-card-back our_deliver_model_6">
                        <div class="card-header card_header_back ">

                            <div class="text-center ">Offsite/Offshore Delivery Model</div>
                            <div class="rounded px-1  float-end ">

                                <img src="gnoinv1/images/icon/Fixed-Cost-Model 1.png" alt="..." class="img-fluid">
                            </div>

                        </div>
                        <div class="card-body mt-2 p-2">
                            <p class=" text-center text-white">Enable customers to take advantage of dedicated or
                                on-demand
                                skilled resources.</p>
                            <a href="#" class="btn btn-flipcard">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card-header py-5 ">


                            <div class="rounded px-1 ">
                                <img src="gnoinv1/images/icon/Fixed-Cost-Model2.png" alt="...">
                            </div>
                            <div class=" text-center  ">Hybrid Delivery Model</div>

                        </div>
                        
                    </div>
                    <div class="flip-card-back our_deliver_model_3">
                        <div class="card-header card_header_back ">

                            <div class="text-center">Hybrid Delivery Model</div>
                            <div class="rounded px-1  float-end ">

                                <img src="gnoinv1/images/icon/Fixed-Cost-Model 1.png" alt="..." class="img-fluid">
                            </div>

                        </div>
                        <div class="card-body mt-2 p-2">
                            <p class=" text-center text-white">
                                Consolidation of onsite and offsite models for optimal
                                results and performance.

                            </p>
                            <a href="#" class="btn btn-flipcard">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
        
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card-header py-5 ">


                            <div class="rounded px-1 ">
                                <img src="gnoinv1/images/icon/Fixed-Cost-Model6.png" alt="...">
                            </div>
                            <div class=" text-center  ">Universal Delivery Model</div>

                        </div>
                        
                    </div>
                    <div class="flip-card-back our_deliver_model_7">
                        <div class="card-header card_header_back ">

                            <div class="text-center text-white">Universal Delivery Model</div>
                            <div class="rounded px-1  float-end ">

                                <img src="gnoinv1/images/icon/Fixed-Cost-Model 1.png" alt="..." class="img-fluid">
                            </div>

                        </div>
                        <div class="card-body mt-2 p-2">
                            <p class=" text-center text-white ">
                                Real-time control of project according to
                                convenient time zone
                                for complete monitoring.
                            </p>
                            <a href="#" class="btn btn-flipcard">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card-header py-5 ">


                            <div class="rounded px-1 ">
                                <img src="gnoinv1/images/icon/Fixed-Cost-Model10.png" alt="...">
                            </div>
                            <div class=" text-center ">Platform as a Service (PaaS) Model</div>

                        </div>
                        
                    </div>
                    <div class="flip-card-back our_deliver_model_8">

                        <div class="card-header card_header_back ">

                            <div class="text-center ">Platform as a Service (PaaS) Model</div>
                            <div class="rounded px-1  float-end ">

                                <img src="gnoinv1/images/icon/Fixed-Cost-Model10.png" alt="..." class="img-fluid">
                            </div>

                        </div>
                        <div class="card-body mt-2 p-2">
                            <p class=" text-center text-white">With PaaS, Gnoin provides all the backend infrastructure, including networking, middleware, servers, storage, virtualization, OS, and runtime environments.</p>
                            <a href="#" class="btn btn-flipcard">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card-header py-5 ">


                            <div class="rounded px-1 ">
                                <img src="gnoinv1/images/icon/Fixed-Cost-Model4.png" alt="...">
                            </div>
                            <div class=" text-center  ">Software-as-a-Service (SaaS) Model</div>

                        </div>
                        
                    </div>
                    <div class="flip-card-back our_deliver_model_5">
                        <div class="card-header card_header_back ">

                            <div class="text-center ">Software-as-a-Service (SaaS) Model</div>
                            <div class="rounded px-1  float-end ">

                                <img src="gnoinv1/images/icon/Fixed-Cost-Model 1.png" alt="..." class="img-fluid">
                            </div>

                        </div>
                        <div class="card-body mt-2 p-2">
                            <p class=" text-center text-white ">
                                We provides a complete software solution which you
                                purchase/rent on a pay-as-you-go basis from a cloud service provider.
                                .</p>
                            <a href="#" class="btn btn-flipcard">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>




</div>



<div class="container-fluid g-0 our_portfolio_section">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <p class="our_portfolio_heading m-0">OUR PORTFOLIO</p>
            </div>

            <div class="col-12 position-relative">
                <ul class="our_portfolio_subsection ">
                    <li class="image_wrapper overlay">
                        <img src="gnoinv1/images/portfolio/cariloop.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/harper_slome.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/kikufurniture.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/lagear.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/shineeasy.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/stantec.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/top_smile_oral_care.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/easecater.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/clark.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/nutriderm.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/cornerstone.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/easyhotel.png" alt="" class="img-fluid" />
                        <img src="gnoinv1/images/portfolio/woodzee.png" alt="" class="img-fluid" />






                    </li>

                </ul>

               
            </div>


            <div class="swiper_slide_container ">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/cariloop.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">Cariloop</p>

                                <p class="slide_cont_hover">
                                    <a href="http://www.cariloop.com/" target="_blank">Cariloop</a> <br>75% of
                                    organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>


                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/harper_slome.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">Harper Sloan</p>

                                <p class="slide_cont_hover">
                                    <a href="https://harpersloaneproductions.com/" target="_blank">Harper Sloan </a>
                                    <br>75% of organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/kikufurniture.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">kikufurniture</p>

                                <p class="slide_cont_hover">
                                    <a href="https://kikufurniture.com/" target="_blank">kikufurniture</a> <br>75%
                                    of organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/lagear.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">Lagear</p>

                                <p class="slide_cont_hover">
                                    <a href="http://lagear.com/" target="_blank">Lagear</a> <br>75% of organizations
                                    invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/shineeasy.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">Shineeasy</p>

                                <p class="slide_cont_hover">
                                    <a href="https://shineeasy.com/" target="_blank">Shineeasy</a> <br>75% of
                                    organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/stantec.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">Stantec</p>

                                <p class="slide_cont_hover">
                                    <a href="https://www.stantec.com/en" target="_blank">Stantec</a> <br>75% of
                                    organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/top_smile_oral_care.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">Smile Oral Care</p>

                                <p class="slide_cont_hover">
                                    <a href="https://top-smile.com/" target="_blank">Smile Oral Care</a> <br>75% of
                                    organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/easecater.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">EaseCater</p>

                                <p class="slide_cont_hover">
                                    <a href="http://easecater.in/" target="_blank">EaseCater</a> <br>75% of
                                    organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/clark.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">clark</p>

                                <p class="slide_cont_hover">
                                    <a href="https://www.clarkconstruction.com/" target="_blank">clark</a> <br>75%
                                    of organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>


                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/nutriderm.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">Nutriderm</p>

                                <p class="slide_cont_hover">
                                    <a href="https://www.neutriderm.com.au/" target="_blank">Nutriderm</a> <br>75%
                                    of organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>


                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/cornerstone.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">Corner Stone</p>

                                <p class="slide_cont_hover">
                                    <a href="https://cornerstonecaregiving.com/" target="_blank">Corner Stone</a>
                                    <br>75% of organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>


                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/easyhotel.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">EasyHotel</p>

                                <p class="slide_cont_hover">
                                    <a href="https://www.easyhotel.com/" target="_blank">EasyHotel</a> <br>75% of
                                    organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>



                        <div class="swiper-slide"
                            style="background-image: url('gnoinv1/images/portfolio/woodzee.png'); background-size: cover;">
                            <div class="slide-content">
                                <p class="slide_hide_hover">Woodzee</p>

                                <p class="slide_cont_hover">
                                    <a href="http://woodzee.com/" target="_blank">Woodzee</a> <br>75% of
                                    organizations invested in AI & ML in the past 2
                                    years
                                </p>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>

<section class="container-fluid g-0 mt-5 whychooseusslides">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                        aria-controls="v-pills-home" aria-selected="true">01 Discovery & Planning</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                        aria-controls="v-pills-profile" aria-selected="false">02 Wireframing & Prototyping</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false">03 Design and Development</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false">04 Testing and Quality Assurance</a>
                    <a class="nav-link" id="v-pills-more-tab" data-toggle="pill" href="#v-pills-more" role="tab"
                        aria-controls="v-pills-more" aria-selected="false">05 Launch & Maintenance</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <img src="gnoinv1/images/whychooseus_slide1.jpg" alt="" class="img-fluid">
                        <p>We start by understanding your business, target audience, and marketing goals. This helps us
                            to create a website that meets your specific needs.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <img src="gnoinv1/images/whychooseus_slide2.jpg" alt="" class="img-fluid">
                        <p>We start by understanding your business, target audience, and marketing goals. This helps us
                            to create a website that meets your specific needs.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <img src="gnoinv1/images/whychooseus_slide3.jpg" alt="" class="img-fluid">
                        <p>We start by understanding your business, target audience, and marketing goals. This helps us
                            to create a website that meets your specific needs.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        <img src="gnoinv1/images/whychooseus_slide4.jpg" alt="" class="img-fluid">
                        <p>We start by understanding your business, target audience, and marketing goals. This helps us
                            to create a website that meets your specific needs.</p>
                    </div>

                    <div class="tab-pane fade" id="v-pills-more" role="tabpanel" aria-labelledby="v-pills-more-tab">
                        <img src="gnoinv1/images/whychooseus_slide5.jpg" alt="" class="img-fluid">
                        <p>We start by understanding your business, target audience, and marketing goals. This helps us
                            to create a website that meets your specific needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid g-0 mt-5 why_choose_us_section">
    <div class="container text-center justify-content-around pt-4" data-aos="fade-up">

        <div class="row">
            <div class="col-12">
                <h3 class="choose_us_heading">Why Choose Us?</h3>
                <h4 class="choose_us_subheading">We have been ranked as a top mobile and web development company
                </h4>
                <p>We practice what we preach. We have created a one-of-a-kind mobile monitoring platform that
                    provides a 360° view of our own software company providing our expert CXOs with cutting-edge
                    data analytics and insights at the touch of a button. Our expert team saw the project through
                    multiple iterations to the finish line, to ensure the best possible outcome internally and for
                    the clients..</p>
            </div>


        </div>

        <div class="row g-0 mt-4" data-aos="fade-up" data-aos-delay="200">

            <div class="col-xl-5 col-md-6 img-bg">
                <img src="gnoinv1/images/whychooseus.png" class="img-fluid">
            </div>
            <div class="col-xl-7 col-md-6   position-relative">

                <div class=" swiper Whychooseusslide">
                    <div class="swiper-wrapper mb-5">

                        <div class="swiper-slide">
                            <div class="item">
                                <h3 class="mb-3">Customer Oriented</h3>
                                <h4 class="mb-3">Profits Reflect The Success Of Our Customer.</h4>
                                <p>100% customer satisfaction is our main goal. Customer comes first in our
                                    business process which makes us a customer oriented organization.</p>
                            </div>
                        </div><!-- End slide item -->

                        <div class="swiper-slide">
                            <div class="item">
                                <h3 class="mb-3">Innovative</h3>
                                <h4 class="mb-3">Infect Everyone With Enthusiasm.</h4>
                                <p>Innovation is our identity. We harness creativity to help you grow your
                                    business.</p>
                            </div>
                        </div><!-- End slide item -->



                        <div class="swiper-slide">
                            <div class="item">
                                <h3 class="mb-3">Deadline-Conscious</h3>
                                <h4 class="mb-3">The Ultimate Inspiration Is The Deadline.</h4>
                                <p>We provide our services within the time limit. We do much more than just meet
                                    deadlines.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item">
                                <h3 class="mb-3">Effective Plan</h3>
                                <h4 class="mb-3">A Goal Without A Plan Is Just A Wish.</h4>
                                <p>We create plans that always lead to the success of your business.</p>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="item">
                                <h3 class="mb-3">Transparency</h3>
                                <h4 class="mb-3">The Customers Perception Is Our Reality.</h4>
                                <p>To build and maintain the belief of our customers and our employees alike, we
                                    believe in being open and informative about the key points of information we
                                    share with our customers alike.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item">
                                <h3 class="mb-3">Diversity</h3>
                                <h4 class="mb-3">The Art Of Thinking Independently Together.</h4>
                                <p>We always understand that a diverse workforce, and a culture of inclusion
                                    where everyone's ideas are important, is a business imperative and for us
                                    diversity is what drives innovation.</p>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="item">
                                <h3 class="mb-3">Integrity</h3>
                                <h4 class="mb-3">Speak With Honesty, Think With Sincerity, Act With Integrity.
                                </h4>
                                <p>WHonesty and integrity in the workplace is one of the most important
                                    qualities we hold and uphold..</p>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="item">
                                <h3 class="mb-3">Cost Reduction</h3>
                                <h4 class="mb-3">Cost Reduction Clients Support Proposals Analysis.</h4>
                                <p>Outsourcing software development services provided by Gnoin eliminate
                                    additional expenses on infrastructure, office, salary and training.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item">
                                <h3 class="mb-3">Quality and Security</h3>
                                <h4 class="mb-3">Quality Is Never An Accident. It Is Always The Result Of
                                    Intelligent Effort.</h4>
                                <p>Gnoin is certified as per ISO 9001-2015 Quality Management. All custom
                                    software app development projects that we complete meet the guidelines of
                                    this standards.</p>
                            </div>
                        </div>


                    </div>

                    <div class="swiper-pagination"></div>
                </div>


            </div>


        </div>



    </div>
</section>



<div class="component-21 mt-5">


    <div class="container-fluid g-0 overlap-11 ">
        <div class="rectangle-12"></div>
        <div class="container" id="animatedSection">
            <div class="row">

                <div class="col-12">
                    <h4 class="our_services_heading">Our Services</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 animate_custom_left">
                    <div class="our_services_box">
                        <img class="frame-21" src="gnoinv1/images/icon/ourservicesicon1.png" />
                        <div class="text-wrapper-34 py-3">CUSTOM SOFTWARE DEVELOPMENT</div>
                        <p class="text-wrapper-33">
                            Build enterprise software, essure reliable integration, and innovation your current
                            systems.
                        </p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 animate_custom_left">
                    <div class="our_services_box">
                        <img class="frame-21" src="gnoinv1/images/icon/ourservices2.png" />
                        <div class="text-wrapper-34 py-3">MOBILE APP DEVELOPMENT</div>

                        <p class="text-wrapper-33">
                            Mobile app development, We build an impressive mobile app that fits with your
                            industry and brand in no
                            time.
                        </p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 animate_custom_left">
                    <div class="our_services_box">
                        <img class="frame-21" src="gnoinv1/images/icon/ourservices3.png" />
                        <div class="text-wrapper-34 py-3">BUSINESS BRANDING</div>

                        <p class="text-wrapper-33">Hire end-to-end branding team with niche skills and heavy
                            efficiency.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 animate_custom_left">
                    <div class="our_services_box">
                        <img class="frame-21" src="gnoinv1/images/icon/ourservices4.png" />
                        <div class="text-wrapper-34 py-3">UI/UX DESIGN</div>

                        <p class="text-wrapper-33">
                            Creating beautiful UI/UX design that calls out to our client&#39;s exact vision and
                            goals.
                        </p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 animate_custom_left">
                    <div class="our_services_box">
                        <img class="frame-21" src="gnoinv1/images/icon/ourservices5.png" />
                        <div class="text-wrapper-34 py-3">SOFTWARE TESTING &amp; QA</div>

                        <p class="text-wrapper-33">Hire Software Testing team with niche skills and heavy
                            efficiency.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 animate_custom_left">
                    <div class="our_services_box">
                        <img class="frame-21" src="gnoinv1/images/icon/ourservices6.png" />
                        <div class="text-wrapper-34 py-3">API INTEGRATION &amp; DEVELOPMENT</div>

                        <p class="text-wrapper-33">
                            Integrate third-party APIs for web, cloud, and mobile apps to extend your
                            capabilities with all
                            frameworks and technologies.
                        </p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 animate_custom_left">
                    <div class="our_services_box">
                        <img class="frame-21" src="gnoinv1/images/icon/ourservices7.png" />
                        <div class="text-wrapper-34 py-3">CLOUD DEVELOPMENT</div>

                        <p class="text-wrapper-33">
                            Cloud development services for AWS, Azure, Google and IBM Cloud including
                            consulting, development,
                            migration, integration and testing services.
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 animate_custom_left">
                    <div class="our_services_box">
                        <img class="frame-21" src="gnoinv1/images/icon/ourservices8.png" />
                        <div class="text-wrapper-34 py-3">CLOUD DEVELOPMENT</div>

                        <p class="text-wrapper-33">
                            Cloud development services for AWS, Azure, Google and IBM Cloud including
                            consulting, development,
                            migration, integration and testing services.
                        </p>

                    </div>
                </div>




            </div>
        </div>







    </div>

</div>


<?php

     include("engagementmodel.php");
    ?>
<!--
<div class="container-fluid textimonial_section mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper testimonialslides">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="testimonial_heading">
                                            <h4>Testimonial</h4>
                                        </div>

                                        <div class="testimonial_subheading">
                                            <h5>What They Say?</h5>
                                        </div>

                                        <div class="testimonial_para">
                                            <p>Lorem ipsum dolor sit amet consectetur. Egestas odio feugiat volutpat
                                                pellentesque et varius.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur. In suspendisse mi condimentum
                                                vel vulputate enim. Odio massa commodo odio iaculis nunc nec semper
                                                mi viverra. Volutpat sagittis mauris vitae tristique blandit.
                                                Viverra maecenas in amet lobortis posuere velit.</p>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                                        <div class="testimonial_image">
                                            <img src="gnoinv1/images/testimonial.png" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="testimonial_heading">
                                            <h4>Testimonial</h4>
                                        </div>

                                        <div class="testimonial_subheading">
                                            <h5>What They Say?</h5>
                                        </div>

                                        <div class="testimonial_para">
                                            <p>Lorem ipsum dolor sit amet consectetur. Egestas odio feugiat volutpat
                                                pellentesque et varius.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur. In suspendisse mi condimentum
                                                vel vulputate enim. Odio massa commodo odio iaculis nunc nec semper
                                                mi viverra. Volutpat sagittis mauris vitae tristique blandit.
                                                Viverra maecenas in amet lobortis posuere velit.</p>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                                        <div class="testimonial_image">
                                            <img src="gnoinv1/images/testimonial.png" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="testimonial_heading">
                                            <h4>Testimonial</h4>
                                        </div>

                                        <div class="testimonial_subheading">
                                            <h5>What They Say?</h5>
                                        </div>

                                        <div class="testimonial_para">
                                            <p>Lorem ipsum dolor sit amet consectetur. Egestas odio feugiat volutpat
                                                pellentesque et varius.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur. In suspendisse mi condimentum
                                                vel vulputate enim. Odio massa commodo odio iaculis nunc nec semper
                                                mi viverra. Volutpat sagittis mauris vitae tristique blandit.
                                                Viverra maecenas in amet lobortis posuere velit.</p>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                                        <div class="testimonial_image">
                                            <img src="gnoinv1/images/testimonial.png" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="testimonial_heading">
                                            <h4>Testimonial</h4>
                                        </div>

                                        <div class="testimonial_subheading">
                                            <h5>What They Say?</h5>
                                        </div>

                                        <div class="testimonial_para">
                                            <p>Lorem ipsum dolor sit amet consectetur. Egestas odio feugiat volutpat
                                                pellentesque et varius.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur. In suspendisse mi condimentum
                                                vel vulputate enim. Odio massa commodo odio iaculis nunc nec semper
                                                mi viverra. Volutpat sagittis mauris vitae tristique blandit.
                                                Viverra maecenas in amet lobortis posuere velit.</p>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                                        <div class="testimonial_image">
                                            <img src="gnoinv1/images/testimonial.png" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="testimonial_heading">
                                            <h4>Testimonial</h4>
                                        </div>

                                        <div class="testimonial_subheading">
                                            <h5>What They Say?</h5>
                                        </div>

                                        <div class="testimonial_para">
                                            <p>Lorem ipsum dolor sit amet consectetur. Egestas odio feugiat volutpat
                                                pellentesque et varius.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur. In suspendisse mi condimentum
                                                vel vulputate enim. Odio massa commodo odio iaculis nunc nec semper
                                                mi viverra. Volutpat sagittis mauris vitae tristique blandit.
                                                Viverra maecenas in amet lobortis posuere velit.</p>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                                        <div class="testimonial_image">
                                            <img src="gnoinv1/images/testimonial.png" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="testimonial_heading">
                                            <h4>Testimonial</h4>
                                        </div>

                                        <div class="testimonial_subheading">
                                            <h5>What They Say?</h5>
                                        </div>

                                        <div class="testimonial_para">
                                            <p>Lorem ipsum dolor sit amet consectetur. Egestas odio feugiat volutpat
                                                pellentesque et varius.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur. In suspendisse mi condimentum
                                                vel vulputate enim. Odio massa commodo odio iaculis nunc nec semper
                                                mi viverra. Volutpat sagittis mauris vitae tristique blandit.
                                                Viverra maecenas in amet lobortis posuere velit.</p>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                                        <div class="testimonial_image">
                                            <img src="gnoinv1/images/testimonial.png" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="testimonial_heading">
                                            <h4>Testimonial</h4>
                                        </div>

                                        <div class="testimonial_subheading">
                                            <h5>What They Say?</h5>
                                        </div>

                                        <div class="testimonial_para">
                                            <p>Lorem ipsum dolor sit amet consectetur. Egestas odio feugiat volutpat
                                                pellentesque et varius.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur. In suspendisse mi condimentum
                                                vel vulputate enim. Odio massa commodo odio iaculis nunc nec semper
                                                mi viverra. Volutpat sagittis mauris vitae tristique blandit.
                                                Viverra maecenas in amet lobortis posuere velit.</p>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                                        <div class="testimonial_image">
                                            <img src="gnoinv1/images/testimonial.png" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="testimonial_heading">
                                            <h4>Testimonial</h4>
                                        </div>

                                        <div class="testimonial_subheading">
                                            <h5>What They Say?</h5>
                                        </div>

                                        <div class="testimonial_para">
                                            <p>Lorem ipsum dolor sit amet consectetur. Egestas odio feugiat volutpat
                                                pellentesque et varius.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur. In suspendisse mi condimentum
                                                vel vulputate enim. Odio massa commodo odio iaculis nunc nec semper
                                                mi viverra. Volutpat sagittis mauris vitae tristique blandit.
                                                Viverra maecenas in amet lobortis posuere velit.</p>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                                        <div class="testimonial_image">
                                            <img src="gnoinv1/images/testimonial.png" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="testimonial_heading">
                                            <h4>Testimonial</h4>
                                        </div>

                                        <div class="testimonial_subheading">
                                            <h5>What They Say?</h5>
                                        </div>

                                        <div class="testimonial_para">
                                            <p>Lorem ipsum dolor sit amet consectetur. Egestas odio feugiat volutpat
                                                pellentesque et varius.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur. In suspendisse mi condimentum
                                                vel vulputate enim. Odio massa commodo odio iaculis nunc nec semper
                                                mi viverra. Volutpat sagittis mauris vitae tristique blandit.
                                                Viverra maecenas in amet lobortis posuere velit.</p>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                                        <div class="testimonial_image">
                                            <img src="gnoinv1/images/testimonial.png" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>


            </div>


        </div>

    </div>






</div>




-->
<div class="container-fluid p-0 strt_up_section_fluid" style="">
    <div class="container strt_up_section ">
        <div class="row  d-flex justify-content-center align-items-center">
            <div class="col-12 mt-5">
                <div class="strt_up_heading text-center">
                    <h4 class="text-white">
                        Start Creating Your Startup Today!
                    </h4>
                </div>

                <div class="strt_up_subheading text-center mt-3">
                    <h5 class="text-white">Have a question/suggestion?</h5>
                </div>
            </div>

            <div class="col-7 mt-3">
                <form id="my_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="input-group ">
                    <input type="text" name="Email" aria-label="email" class="form-control">
                    <button type="submit" name="submit" class="input-group-text btn btn-primary">SUBSCRIBE</button>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // Add an event listener to the form's submit event
    document.getElementById("my_form").addEventListener("submit", function (event) {
        // Check if the required fields are empty
        const emailInput = document.querySelector('input[name="Email"]');
        const emailValue = emailInput.value.trim();

        if (!emailValue) {
            alert("Please fill in all required fields.");
            event.preventDefault(); // Prevent form submission
        } else if (!validateEmail(emailValue)) {
            alert("Please enter a valid email address.");
            event.preventDefault(); // Prevent form submission
        } else {
            // Display a success message
            alert("Data submitted successfully.");
            // You can perform additional actions here if needed

            // Prevent the page from reloading
            // event.preventDefault(); // This line is not needed here as it's already being prevented in the previous conditions
        }
    });

    // Function to validate email using a regular expression
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
</script>







<?php

include("footer.php");
?>