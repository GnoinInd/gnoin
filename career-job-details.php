<?php require "./databaseControl/retrieveJobs.php";
// var_dump($jobDetails);
?>
<?php
include("header.php");
$session['salaryStatus'] = 0;
?>
<style>
    .hide {
        display: none;
    }
</style>
<!-- sec-1 inner banner top  -->
<section class="inner-banner">
    <div class="container">
        <div class="inner-banner__content-wrap">
            <h2 class="text-light">CAREER</h2>
            <p>Be a part of one of the fastest growing company in India, we encourage learning new technologies and
                nurture fresh talent with utmost care.
            <p>


            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="./on-demand-developer.php"> Page</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- sec-2 -->
<section class="career-page bg-light-blue">
    <div class="container h-100 w-100">
        <div class="row">
            <div class="col-md-6 ">
                <h1 class="pt-2 pb-2 mt-3 font_size_heding "><?php echo $jobDetails['job_title']; ?></h1>
                <div class="d-flex flex-column">
                    <div class="card mb-3">
                        <div class="card-body d-flex flex-column gap-2">
                            <!-- <h5 class="career-text-para">1500 Concord Ter, Sunrise, FL 33323</h5> -->
                            <h5 class="career-text-para"><?php echo $jobDetails['job_subtitle']; ?></h5>
                            <div class="d-flex align-items-center justify-content-start">
                                <img src="./images/career/icon/circle-icone.png" alt="" />
                                <small class=" ml-2">Fair pay, according to null% of employee reviews</small>
                            </div>
                            <?php
                            if ($jobDetails['salaryVisibility'] == 0) {
                            ?>
                                <div class="ctc-tect">
                                    <!-- <h5><span class="mr-2">$50,000</span> - <span class="ml-2 mr-2">$60,000</span>a year -->
                                    <span class="mr-2">₹<?php echo $jobDetails['min_salary']; ?></span> - <span class="ml-2 mr-2">₹<?php echo $jobDetails['max_salary']; ?></span>a year
                                    </h5>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="job-type">
                                <small><strong>-<?php echo $jobDetails['working_mode']; ?></strong></small>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-thm px-5 open-call-btn">Apply</a>
                                <div class="h-100"><img src="./images/career/icon/career-icon-1.png" alt="img" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body d-flex flex-column gap-2">
                            <h4 class="text-strong ">Job details</h4>
                            <?php
                            if ($jobDetails['salaryVisibility'] == 0) {
                            ?>
                                <div class="row flex-nowrap align-items-center  justify-content-center">
                                    <div class="col-4">
                                        <div class="d-flex align-items-center gap-3 justify-content-start">
                                            <img src="./images/career/icon/icon-5.png" alt="" />
                                            <h6 class="text-strong m-0">Pay</h6>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <p class="text-strong text-center m-0">:</p>
                                    </div>
                                    <div class="col-7">
                                        <p class="m-0 bg-light d-inline-block px-2">
                                            <!-- <span class="mr-2">$50,000</span> - <span class="ml-2 mr-2">$60,000</span>a year -->
                                            <span class="mr-2">₹<?php echo $jobDetails['min_salary']; ?></span> - <span class="ml-2 mr-2">₹<?php echo $jobDetails['max_salary']; ?></span>a year
                                        </p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="row flex-nowrap align-items-center  justify-content-center">
                                <div class="col-4">
                                    <div class="d-flex align-items-center gap-3 justify-content-start">
                                        <img src="./images/career/icon/icon-4.png" alt="" />
                                        <h6 class="text-strong m-0">Job type</h6>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p class="text-strong text-center m-0">:</p>
                                </div>
                                <div class="col-7">
                                    <p class="m-0 bg-light d-inline-block px-2">
                                        <?php echo $jobDetails['working_mode']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row flex-nowrap align-items-center  justify-content-center">
                                <div class="col-4">
                                    <div class="d-flex align-items-center gap-3 justify-content-start">
                                        <img src="./images/career/icon/icon-3.png" alt="" />
                                        <h6 class="text-strong m-0">Shift</h6>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p class="text-strong text-center m-0">:</p>
                                </div>
                                <div class="col-7">
                                    <p class="m-0">
                                        <span class="bg-light d-inline-block px-2"><?php echo $jobDetails['time_shift']; ?></span>
                                    </p>
                                </div>
                            </div>
                            <div class="row flex-nowrap align-items-center  justify-content-center">
                                <div class="col-4">
                                    <div class="d-flex align-items-center gap-3 justify-content-start">
                                        <img src="./images/career/icon/icon-3.png" alt="" />
                                        <h6 class="text-strong m-0">Schedule</h6>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p class="text-strong text-center m-0">:</p>
                                </div>
                                <div class="col-7">
                                    <p class="m-0">
                                        <span class="bg-light d-inline-block px-2">Monday to Saturday</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row flex-nowrap align-items-center  justify-content-center">
                                <div class="col-4">
                                    <div class="d-flex align-items-center gap-3 justify-content-start">
                                        <img src="./images/career/icon/icon-2.png" alt="" />
                                        <h6 class="text-strong m-0">Location</h6>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p class="text-strong text-center m-0">:</p>
                                </div>
                                <div class="col-7">
                                    <p class="m-0 bg-light text-start d-inline-block px-2">
                                        <?php echo $jobDetails['location']; ?>
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- <div class="card mb-3">
                        <div class="card-body d-flex flex-column gap-2">
                            <div class="d-flex flex-column align-items-start justify-content-center">
                                <h4 class="text-strong m-0">Benefits</h4>
                                <small class="m-0">Pulled from the full job description</small>
                            </div>
                            <div class="d-flex flex-wrap gap-2 lign-item-center justify-content-between py-2 px-4">
                                <a class="btn career-benffit-tag">401(k)</a>
                                <a class="btn career-benffit-tag">401(k) matching</a>
                                <a class="btn career-benffit-tag">Life insurance</a>
                                <a class="btn career-benffit-tag">Health insurance</a>
                                <a class="btn career-benffit-tag">Employee assistance program</a>
                                <a class="btn career-benffit-tag">Dental insurance</a>
                                <a class="btn career-benffit-tag">Paid time off</a>
                                <a class="btn career-benffit-tag">Vision insurance</a>
                                <a class="btn career-benffit-tag">Pay</a>
                            </div>
                        </div>
                    </div> -->
                </div>

            </div>
            <div class="col-md-6"></div>
        </div>




    </div>
</section>
<!-- sec-3 -->
<section class="career-page">
    <div class="container h-100 w-100">
        <div class="d-block pt-2 mt-4 mb-4 pb-2 ">
            <div class="card mb-4 p-4 border-primary-thm">
                <div class="row">
                    <div class="col-md-7">
                        <div class="d-flex p-1 p-md-4 flex-column justify-content-center align-items-start">
                            <h3 class="card-title career-title-h3">Company Overview</h3>
                            <p class="career-text-para">Founded in 2000, Gnoin is a global software development
                                solutions and support services
                                provider. Gnoin's specialized technology and industry experts serve startups, SMBs, and
                                Fortune 5000 companies with an unparalleled software delivery model suited to the needs
                                of
                                the clients. Gnoin's one-stop-shop model spans the entire software technology spectrum.
                                Headquartered in Sunrise, Florida. Gnoin has 14 locations throughout the U.S. and
                                abroad.
                                For more information, visit www.Gnoin.com</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-fuild"><img src="./images/career/image/career-img-1.png " alt="" /></div>
                    </div>
                </div>
            </div>
            <div class="card  p-4 border-primary-thm">
                <div class="row">
                    <div class="col-12 pt-2 pb-2">
                        <h3 class="card-title text-center career-title-h3">Channel Partner Manager Position Summary</h3>
                    </div>
                    <div class="col-md-5">
                        <div class="img-fuild"><img src="./images/career/image/career-img-1.png " alt="" /></div>
                    </div>
                    <div class="col-md-7">
                        <div class="d-flex p-1 p-md-4 flex-column justify-content-center align-items-start">
                            <!-- <p class="career-text-para">Gnoin is looking for a full-time, Channel Partner Manager
                                focused on generating and expanding partnership opportunities. This individual will be
                                responsible for partner engagement, pursuing additional opportunities with existing
                                partners, and creating strategic alliances to create new partners. Partners and their
                                communities are key referral pathways for Gnoin’s business initiatives and this role
                                will ultimately be accountable for growth via our partnership channels. This position
                                requires a motivated, self-starter with sales knowledge, plus strong analytical and
                                interpersonal skills.
                            </p> -->
                            <p class="career-text-para"><?php echo $jobDetails['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sec-4 -->
<section class="career-page">
    <div class="container h-100 w-100">
        <div class="d-block pt-4 mt-4 mb-4 pb-4">
            <div class="row">
                <div class="col-12  mb-3">
                    <h3 class="card-title text-center career-title-h3">Duties & Responsibilities</h3>
                </div>
                <div class="col-md-6 ">
                    <div class="career-duties-overlay">
                        <div class="d-flex gap-3 justify-content-center align-items-start">
                            <img src="./images/career/icon/duties-icon-1.png" alt="" />
                            <p class="career-text-para-small">Open doors with targeted companies that align with Chetu’s
                                partnerships objectives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="career-duties-overlay">
                        <div class="d-flex gap-3 justify-content-center align-items-start">
                            <img src="./images/career/icon/Group 2504.png" alt="" />
                            <p class="career-text-para-small">Open doors with targeted companies that align with Chetu’s
                                partnerships objectives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="career-duties-overlay">
                        <div class="d-flex gap-3 justify-content-center align-items-start">
                            <img src="./images/career/icon/Group 2501.png" alt="" />
                            <p class="career-text-para-small">Open doors with targeted companies that align with Chetu’s
                                partnerships objectives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="career-duties-overlay">
                        <div class="d-flex gap-3 justify-content-center align-items-start">
                            <img src="./images/career/icon/Group 2506.png" alt="" />
                            <p class="career-text-para-small">Open doors with targeted companies that align with Chetu’s
                                partnerships objectives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="career-duties-overlay">
                        <div class="d-flex gap-3 justify-content-center align-items-start">
                            <img src="./images/career/icon/Group 2503.png" alt="" />
                            <p class="career-text-para-small">Open doors with targeted companies that align with Chetu’s
                                partnerships objectives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="career-duties-overlay">
                        <div class="d-flex gap-3 justify-content-center align-items-start">
                            <img src="./images/career/icon/Group 2510.png" alt="" />
                            <p class="career-text-para-small">Open doors with targeted companies that align with Chetu’s
                                partnerships objectives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="career-duties-overlay">
                        <div class="d-flex gap-3 justify-content-center align-items-start">
                            <img src="./images/career/icon/Group 2505.png" alt="" />
                            <p class="career-text-para-small">Open doors with targeted companies that align with Chetu’s
                                partnerships objectives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="career-duties-overlay">
                        <div class="d-flex gap-3 justify-content-center align-items-start">
                            <img src="./images/career/icon/Group 2509.png" alt="" />
                            <p class="career-text-para-small">Open doors with targeted companies that align with Chetu’s
                                partnerships objectives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sec-5 -->
<section class="career-page">
    <div class="container h-100 w-100">
        <div class="d-block pt-4 mt-4 mb-4 pb-4 ">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class=" mb-3">
                    <h3 class="card-title text-center career-title-h3">Skills</h3>
                </div>
                <div class="card w-100">
                    <div class="row ">
                        <div class="col-md-5">
                            <div class="h-100"><img class="h-100" src="./images/career/image/career-image-8.png " alt="" /></div>
                        </div>
                        <div class="col-md-7">
                            <ul class=" p-md-4 m-0"><?php
                                                    $skillsArray = explode(',', $jobDetails['skills']);
                                                    foreach ($skillsArray as $skill) {
                                                        echo '<li class="career-list-wrapper">' . $skill . '</li>';
                                                    }
                                                    ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sec-6 -->
<section class="career-page fixed-career-bg">
    <div class="container h-100 w-100">
        <div class="d-block pt-4 mt-4 mb-4 pb-4">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="mb-3">
                    <h3 class="text-light text-center career-title-h3">Requirements</h3>
                </div>
                <div class="card p-1  p-md-4 w-100">
                    <div class="row  px-md-4 m-0">
                        <div class="col-sm-9">
                            <ul class="p-md-4 p-2">
                                <!-- <li class="career-list-wrapper">Bachelor’s Degree Required</li>
                                <li class="career-list-wrapper">Two (2) years of experience at a minimum in Sales,
                                    Relationship Management, or Partnerships</li>
                                <li class="career-list-wrapper">Willing and able to travel (5%) attending Partner
                                    Conferences, Summits, and Partner Trade Shows.
                                </li> -->
                                <?php
                                $QualificationArray = explode(',', $jobDetails['qualification']);
                                foreach ($QualificationArray as $qualification) {
                                    echo '<li class="career-list-wrapper">' . $qualification . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <div class="d-flex justify-content-center align-items-center h-100 w-100">

                                <a href="#" class="btn m-auto d-block btn-thm w-75">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- sec-7-->
<section class="career-page thm-bg">
    <div class="container h-100 w-100">
        <div class="d-block pt-4 pb-4 ">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="mb-2">
                    <h3 class="text-light text-center career-title-h3">Compensation Structure</h3>
                </div>
                <div class="pt-4 pb-4 mb-2 w-100 position-relative">
                    <div class="section_image  caree-img-overlay w-50 ">
                        <img src="./images/career/image/career-completion-6.png" alt="" class="img-fluid  rounded-0 h-100 w-100">
                        <div class="card custom_card_design2 thm-blur-bg">
                            <div class="card-body">
                                <ul class="text-light p-md-4 p-2">
                                    <li class="text-light ">Salary Position</li>
                                    <li class="text-light ">Commission Program</li>
                                    <li class="text-light ">Health insurance that’s 100% premium paid by the company
                                    </li>
                                    <li class="text-light ">Paid vacation</li>
                                    <li class="text-light ">401(k) employee</li>
                                    <li class="text-light ">Assistance Program (EAP) and more</li>


                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- sec-8 -->
<section class="career-page">
    <div class="container h-100 w-100">
        <div class="d-block  mt-4 mb-4 ">
            <div class="row">
                <div class="col-sm-8">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <div class="mb-3 d-inline-block w-75">
                            <h3 class="career-title-h3 text-center float-md-right">Experience</h3>
                        </div>
                        <div class="p-2 w-100 text-start">
                            <p class="career-text-para"><span class="mr-2 text-primary-thm"><i class="fa fa-hand-o-right text-primary"></i></span>Partnership experience is a
                                plus and preferred!
                            </p>
                            <p class="career-text-para"><span class="mr-2"><i class="fa fa-hand-o-right text-primary"></i></span>Sales, Partnership, or
                                Relationship Management for 2 years (Required)
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="img-fuild">
                        <img src="./images/career/image/career-quality-2.png" alt="img" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- sec-9 -->
<section class="career-page career-benffit-tag">
    <div class="container h-100 w-100">
        <div class="d-block ">
            <div class="row p-4">
                <div class="col-sm-3 d-block m-auto">
                    <div class="h-75">
                        <img class="h-100" src="./images/career/image/career-location-4.png" alt="img" />
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="text-center">
                        <h2 class="">Astra Towers, ASO 432, 4th Floor, South Block, Action Area 2C,New Town, Rajarhat,
                            Kolkata, West Bengal - 700161</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- from slide full page  -->

<div id="wrap" class="bg-light-blue">
    <div class="container h-100 w-100">
        <div class="p-4 d-block m-auto w-100">
            <div class="d-flex flex-column align-items-center justify-content-between">
                <div class="mb-2 w-100 d-flex justify-content-between align-items-center">
                    <h3 class="card-title career-title-h3">Compensation Structure</h3>
                    <button class=" btn  close-call">Back</button>
                </div>
                <form id="JobForm" action="InsertJobRequest.php" method="POST" enctype="multipart/form-data" class="card p-4 w-100 them-bg-inherit mb-3 mt-3 border-primary-thm">
                    <fieldset>
                        <div class="card-body p-0">
                            <div class="row  w-100">
                                <div class="col-12 mb-4">
                                    <h4 class="career-text-para">1500 Concord Ter, Sunrise, FL 33323</h4>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <input class="animated-input" id="FirstName" name="FirstName" type="text" id="FirstName" required />
                                        <label class="animated-lable" for="FirstName">First Name</label>
                                    </div>

                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <input class="animated-input" id="MIddleName" name="MIddleName" type="text" id="MIddleName" />
                                        <label class="animated-lable" for="MIddleName">MIddle Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <input class="animated-input" id="LastName" name="LastName" type="text" id="LastName" required />
                                        <label class="animated-lable" for="LastName">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <input class="animated-input" id="CurrentAddress" name="CurrentAddress" type="text" id="CurrentAddress" required />
                                        <label class="animated-lable" for="CurrentAddress">Current Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <select class="animated-input" name="HIghestQualification" id="HIghestQualification" required>
                                            <option value="" selected></option>
                                            <option value="10th">10th</option>
                                            <option value="12th">12th</option>
                                        </select>
                                        <label class="animated-lable" for="HIghestQualification">Highest
                                            Qualification</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <select class="animated-input" name="PassingYear" id="PassingYear" required>
                                            <option value="" selected></option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                        </select> <label class="animated-lable" for="PassingYear">Passing Year</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <input class="animated-input" name="Dob" type="date" id="Dob" required />
                                        <label class="animated-lable custom-label" for="Dob">Dob</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <select class="animated-input" name="EmployeIn" id="EmployeeIn" required>
                                            <option value="" selected></option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                        </select> <label class="animated-lable" for="EmployeeIn">Employee In</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <select class="animated-input" name="Experience" id="Experience" required>
                                            <option value="" selected></option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select> <label class="animated-lable" for="Experience">Experience</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <input class="animated-input" name="Jobtitle" type="text" id="JobTitle" required />
                                        <label class="animated-lable" for="JobTitle">Job Title</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <select class="animated-input" name="Language" id="Language" required>
                                            <option value="" selected></option>
                                            <option value="hindi">Hindi</option>
                                            <option value="bengali">English</option>
                                        </select> <label class="animated-lable" for="Language">Language</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field">
                                        <select class="animated-input" name="ImmediateJoiner" id="ImmediateJoiner" required>
                                            <option value="" selected></option>
                                            <option value="10">10</option>
                                            <option value="12">12</option>
                                        </select> <label class="animated-lable" for="ImmediateJoiner">Immediate
                                            Joiner</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field custom-border">
                                        <input class=" animated-input file-input" name="resume" type="file" id="uploadResume" required />
                                        <label class="animated-lable custom-label" for="uploadResume"> Upload Resume</label>

                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field custom-border">
                                        <input class=" animated-input file-input" name="panCard" type="file" id="uploadPanCard" required />
                                        <label class="animated-lable custom-label" for="uploadPanCard"> Upload Pan Card </label>

                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="animated-input-field custom-border">
                                        <input class=" animated-input file-input" type="file" name="aadhar" id="uploadAadhar" required />
                                        <label class="animated-lable custom-label" for="uploadAadhar"> Upload Aadhar</label>

                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 col-md-4">
                                    <div class="form-check form-check-inline animated-input-field"> Are you fresher ?</div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="FresherChoice" id="FresherChoice1" value="yes">
                                        <label class="form-check-label" for="FresherChoice1">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="other form-check-input" type="radio" name="FresherChoice" id="FresherChoice2" value="no">
                                        <label class="other form-check-label" for="FresherChoice2">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="NonFresher" class="hide">
                                <div class="row w-100">
                                    <div class="col-sm-6 mb-3 col-md-4">
                                        <div class="animated-input-field">
                                            <input class="animated-input" name="NonFreshersExperience" type="text" id="NonFreshersExperience" />
                                            <label class="animated-lable" for="NonFreshersExperience">Total
                                                Experience <span for="NonFreshersExperience" style="color:red;">*</span></label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3 col-md-6">
                                        <div class="animated-input-field">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="fullTime">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Full Time
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="partTime">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Part Time
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Internship" checked>
                                                <label class="form-check-label" for="exampleRadios3">
                                                    Internship
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row w-100">
                                    <div class="col-sm-6 mb-3 col-md-4">
                                        <div class="animated-input-field">
                                            <select class="animated-input" name="TotalExperience" id="TotalExperience">
                                                <option value="" selected></option>
                                                <option value="1">1 year</option>
                                                <option value="2">2 year</option>
                                                <option value="3">3 year</option>
                                                <option value="4">4 year</option>
                                                <option value="5">5 year</option>
                                            </select>
                                            <label class="animated-lable" for="TotalExperience">Total
                                                Experience</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 col-md-4">
                                        <div class="animated-input-field">
                                            <select class="animated-input" name="Month" id="Month">
                                                <option value="" selected></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                            <label class="animated-lable" for="Month">Months</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3 col-md-4">
                                        <div class="animated-input-field">
                                            <input class="animated-input" name="CurrentCompany" type="text" id="CurrentCompany" />
                                            <label class="animated-lable" for="CurrentCompany">Current Company Name <span for="CurrentCompany" style="color:red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 col-md-4">
                                        <div class="animated-input-field">
                                            <input class="animated-input" name="CurrentDesignation" type="text" id="CurrentDesignation" />
                                            <label class="animated-lable" for="CurrentDesignation">Current Designation<span for="CurrentDesignation" style="color:red;">*</span></label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3 col-md-4 d-flex flex-row">
                                        <div class="col-sm-4 col-sm-4">
                                            <div class="animated-input-field">
                                                <select class="animated-input" name="currency" id="currency">
                                                    <option value="Rupee" selected>Rs</option>
                                                    <option value="Dollar">$</option>
                                                </select>
                                                <label class="animated-lable" for="currency">Currency</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-sm-8 ">
                                            <div class="animated-input-field">
                                                <input class="animated-input" name="Price" type="text" id="Price" />
                                                <label class="animated-lable" for="Price">
                                                    Price<span for="Price" style="color:red;">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 col-md-4">
                                        <div class="animated-input-field">
                                            <select class="animated-input" name="NoticePeriod" id="NoticePeriod" required>
                                                <option value="" selected></option>
                                                <option value="1">1 year</option>
                                                <option value="2">2 year</option>
                                                <option value="3">3 year</option>
                                                <option value="4">4 year</option>
                                                <option value="5">5 year</option>
                                            </select>
                                            <label class="animated-lable" for="NoticePeriod">Notice
                                                Period <span for="NoticePeriod" style="color:red;">*</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="w-100 d-inline-block">
                        <button type="submit" class="btn thm-btn  float-right">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        const successParam = urlParams.get('success');

        if (successParam === 'SUCCESS') {
            alert('Form submitted successfully!');
        }
    });
</script>
<!-- form end -->
<?php
include("footer.php");
?>