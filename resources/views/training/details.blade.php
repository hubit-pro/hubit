<!DOCTYPE html>
<html lang="en">

<head>
    <title> Details</title>
    @include('includes/traininghead')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="unicat/styles/bootstrap4/bootstrap.min.css">
    <link href="unicat/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="unicat/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="unicat/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="unicat/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="unicat/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="css/training/course-details.css">
</head>

<body>


    <!-----------------------NAVBAR------------------------------->
    @include('includes/navtraining')

    <!-------------------------NAVBAR END--------------------------------->
    <div class="super_container">



        <!-- Home -->

        <div class="home">
            <div class="breadcrumbs_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumbs">
                                <ul>
                                    <!-- <li><a href="home-training">Home</a></li>
								<li><a href="courses">Courses</a></li> -->
                                    <li>Course Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="course p-0">
            <div class="container">
                <div class="row">

                    <!-- Course -->
                    <div class="col-lg-12">

                        <div class="course_container">
                            <div class="course_title">Software Training</div>
                            <div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">Teacher:</div>
                                    <div class="course_info_text"><a href="#">Jacke Masito</a></div>
                                </div>

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">Reviews:</div>
                                    <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                                </div>

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">Categories:</div>
                                    <div class="course_info_text"><a href="#">Languages</a></div>
                                </div>

                            </div>

                            <!-- Course Image -->
                            <div class="course_image"><img src="unicat/images/course_image.jpg" alt="" width="90%"></div>

                            <!-- Course Tabs -->
                            <div class="course_tabs_container">
                                <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                    <div class="tab active">description</div>
                                    <div class="tab">curriculum</div>
                                    <div class="tab">reviews</div>
                                </div>
                                <div class="tab_panels">

                                    <!-- Description -->
         <div class="tab_panel active">
             <div class="tab_panel_title">Software Training</div>
                <div class="tab_panel_content">
                    <div class="tab_panel_text">
                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                     <div class="tab_panel_section">
                    <div class="tab_panel_subtitle">Requirements</div>
                     <ul class="tab_panel_bullets">
                        <li>Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent.</li>
                        <li>Cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a.</li>
                        <li>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</li>
                        <li>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</li>
                     </ul>
                         </div>
                     <!-- <div class="tab_panel_section">
                             <div class="tab_panel_subtitle">What is the target audience?</div>
                            <div class="tab_panel_text">
                          <p>This course is intended for anyone interested in learning to master his or her own body.This course is aimed at beginners, so no previous experience with hand balancing skillts is necessary Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        </div>
                     </div> -->
                        <!-- <div class="tab_panel_faq">
                        <div class="tab_panel_title">FAQ</div> -->

                         <!-- Accordions -->
                            <!-- <div class="accordions">
                            <div class="elements_accordions">
                            <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center">
                                 <div>Can I just enroll in a single course?</div>
                            </div>
                            <div class="accordion_panel">
                                 <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                             </div>
                        
                     </div>

                                    <div class="accordion_container">
                                    <div class="accordion d-flex flex-row align-items-center active">
                                    <div>I'm not interested in the entire Specialization?</div>
                                      </div>
                                    <div class="accordion_panel">
                                  <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                      </div>
                                    </div>
                                <div class="accordion_container">
                                 <div class="accordion d-flex flex-row align-items-center">
                                 <div>What is the refund policy?</div>
                                    </div>
                                    <div class="accordion_panel">
                                    <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                    </div>
                            </div>
                             <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center">
                                <div>What background knowledge is necessary?</div>
                            </div>
                                     <div class="accordion_panel">
                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                     </div>
                                </div>

                                <div class="accordion_container">
                                 <div class="accordion d-flex flex-row align-items-center">
                                <div>Do i need to take the courses in a specific order?</div>
                             </div>
                            <div class="accordion_panel">
                            <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                        </div>
                    </div> -->
                </div>
             </div>
        </div>
    </div>
</div>
<button type="submit"class="btn">Enroll now<i class="fas fa-paper-plane"></i></button>
<!-- <footer> -->

@include('includes.footer')

 <!-- </footer>  -->
<script src="unicat/js/jquery-3.2.1.min.js"></script>
<script src="unicat/styles/bootstrap4/popper.js"></script>
<script src="unicat/styles/bootstrap4/bootstrap.min.js"></script>
<script src="unicat/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="unicat/plugins/easing/easing.js"></script>
<script src="unicat/plugins/parallax-js-master/parallax.min.js"></script>
<script src="unicat/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="unicat/js/course.js"></script>
<script src="js/miss.js"></script>

</body>

</html>