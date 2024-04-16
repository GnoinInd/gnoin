<?php include "./databaseControl/retrieveJobs.php" ;
?>
<?php

include("header.php");
// var_dump($jobData); 
?>
<section class="inner-banner">
    <div class="container">
        <div class="inner-banner__content-wrap">
            <h2 class="text-light">CAREER</h2>
            <p>Be a part of one of the fastest growing company in India, we encourage learning new technologies and nurture fresh talent with utmost care.
            <p>


            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="./on-demand-developer.php"> Page</a></li>
            </ul>
        </div>
    </div>
</section>

<section class=" web_design_section_main">
    <div class="container">
        <div class="row">
            <div class="col-md-7  justify-content-center align-items-start">
                <h2 class="text-primary">Current Job Opportunities</h2>
                <p><strong>One of the Best places to Work.</strong></p>
                <p>We bring together some of the most hardworking and skilled professionals from the industry. Join us, and we will help you achieve your dreams by developing you professionally and personally!</p>


            </div>
            <div class="col-md-5">
                <div class="web_desing_right">
                    <img src="./images/EnterpriseBranding/career.jpg" alt="Careers" title="Careers">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="career_page_section">
    <!-- <div class="container">
        <div class="row" id="job_vacancy_row">
            <div class="col-md-12 col-sm-12 vacant_positions mb-2">
                <div class="box align-items-center rounded-lg">
                    <div class="box_icon d-flex align-items-center justify-content-center rounded" style="width:9%;">
                        <img src="./images/uxui/java.jpg">
                    </div>
                    <div class="box_cnt" style="width:85%;">
                        <h3 class="font-bd">Java Developer</h3>
                        <p class="mb-0 font-md">Hiring Java Developers with 7+ years of experience.</p>

                    </div>
                    <div class="text-right  button_div_career" style="width:4%;"><a href='./career-job-details.php' class="thm-btn1 box_btn openAppyModal" style="cursor:pointer;border: 1px solid; "><span>APPLY</span></a> </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>

        <div class="row" id="job_vacancy_row">
            <div class="col-md-12 col-sm-12 vacant_positions" style="margin-bottom: 5px;">
                <div class="box align-items-center rounded-lg">
                    <div class="box_icon d-flex align-items-center justify-content-center rounded" style="width:9%;">
                        <img src="./images/uxui/react.png">
                    </div>
                    <div class="box_cnt" style="width:85%;">
                        <h3 class="font-bd">React Js Developer</h3>
                        <p class="mb-0 font-md">Hiring React js Developers with 7+ years of experience.</p>

                    </div>
                    <div class="text-right  button_div_career" style="width:4%;"><a href='./career-job-details.php' class="thm-btn1 box_btn openAppyModal" style="cursor:pointer;border: 1px solid; "><span>APPLY</span></a> </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>

        <div class="row" id="job_vacancy_row">
            <div class="col-md-12 col-sm-12 vacant_positions" style="margin-bottom: 5px;">
                <div class="box align-items-center rounded-lg">
                    <div class="box_icon d-flex align-items-center justify-content-center rounded" style="width:9%;">
                        <img src="./images/uxui/php.png">
                    </div>
                    <div class="box_cnt" style="width:85%;">
                        <h3 class="font-bd">PHP Developer</h3>
                        <p class="mb-0 font-md">Hiring PHP Developers with 7+ years of experience.</p>

                    </div>
                    <div class="text-right  button_div_career" style="width:4%;"><a href='./career-job-details.php' class="thm-btn1 box_btn openAppyModal" style="cursor:pointer;border: 1px solid; "><span>APPLY</span></a> </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>


        <div class="row" id="job_vacancy_row">
            <div class="col-md-12 col-sm-12 vacant_positions" style="margin-bottom: 5px;">
                <div class="box align-items-center rounded-lg">
                    <div class="box_icon d-flex align-items-center justify-content-center rounded" style="width:9%;">
                        <img src="./images/uxui/angular.png">
                    </div>
                    <div class="box_cnt" style="width:85%;">
                        <h3 class="font-bd">Angular Developer</h3>
                        <p class="mb-0 font-md">Hiring Angular Developers with 7+ years of experience.</p>

                    </div>
                    <div class="text-right  button_div_career" style="width:4%;"><a class="thm-btn1 box_btn openAppyModal" style="cursor:pointer;border: 1px solid; "><span>APPLY</span></a> </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>



        <div class="row" id="job_vacancy_row">
            <div class="col-md-12 col-sm-12 vacant_positions" style="margin-bottom: 5px;">
                <div class="box align-items-center rounded-lg">
                    <div class="box_icon d-flex align-items-center justify-content-center rounded" style="width:9%;">
                        <img src="./images/uxui/nodejs.jpg">
                    </div>
                    <div class="box_cnt" style="width:85%;">
                        <h3 class="font-bd">Node Js Developer</h3>
                        <p class="mb-0 font-md">Hiring Node js Developers with 7+ years of experience.</p>

                    </div>
                    <div class="text-right  button_div_career" style="width:4%;"><a class="thm-btn1 box_btn openAppyModal" style="cursor:pointer;border: 1px solid; "><span>APPLY</span></a> </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div> -->
    <div class="container">
    <?php foreach ($jobData as $job) : ?>
        <div class="row" id="job_vacancy_row">
            <div class="col-md-12 col-sm-12 vacant_positions mb-2">
                <div class="box align-items-center rounded-lg">
                    <div class="box_icon d-flex align-items-center justify-content-center rounded" style="width:9%;">
                        <!-- Add your dynamic image source here -->
                        <img src="./images/uxui/<?php echo strtolower($job['job_title']); ?>.jpg">
                    </div>
                    <div class="box_cnt" style="width:85%;">
                        <h3 class="font-bd"><?php echo $job['job_title']; ?></h3>
                        <p class="mb-0 font-md"><?php echo $job['job_subtitle']; ?></p>
                    </div>
                    <div class="text-right  button_div_career" style="width:4%;">
                        <a href='./career-job-details.php?id=<?php echo $job['id']; ?>' class="thm-btn1 box_btn openAppyModal" style="cursor:pointer;border: 1px solid; "><span>APPLY</span></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



</section>


<!-- <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div> -->

<?php

include("footer.php");
?>