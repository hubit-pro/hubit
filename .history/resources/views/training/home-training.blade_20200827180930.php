<!DOCTYPE html>
<html>
<head>
	@include("includes/traininghead")
  <link rel="stylesheet" type="text/css" href=" css/training/home-training.css" >

</style>
</head>
<body>

<!-----------------------NAVBAR------------------------------->
@include('includes/navtraining')
<!-------------------------NAVBAR END--------------------------------->


<!-----------------------------SLIDER----------------------->
<div class='container-fluid m-0 p-0' >
     
              <img src="img/it-training-banner.jpg">

      </div>



<!--------------------------SLIDER END------------------------>


 

<!-------------------------TEXT CONTAINER-------------------->


<!--------------------------0UR AMENITIES TOPIC------------------------------>
<section class="container-fluid p-5 text-center" style="background-color: white;">
	<div class="row">
		<div class="col-xl-12" style="color: darkslategray; border-bottom: 1px solid #082941;">
			<h4>OUR AMENITIES</h4>
		</div>
	</div>
</section>
<!------------------------OUR AMENITIES TOPIC END---------------------------->


<!------------------------OUR AMNITIES START----------------->
<section class="container-fluid p-5">
	
	<div class="row">

		<div class="col-xl-2">
			<div class="row">
				<div class="col-xl-12 pl-5">
					<div class="icon">
						<i class='fas fa-video'></i>
					</div>
				</div>

				<div class="col-xl-12 pt-3 pb-3 text"><i>Projector Classrooms</i></div>
			</div>
		</div>

		<div class="col-xl-2">
			<div class="row">
				<div class="col-xl-12 pl-5">
					<div class="icon">
						<i class='fa fa-graduation-cap'></i>
					</div>
				</div>

				<div class="col-xl-12 pt-3 pb-3 text"><i>Project Trainings</i></div>
			</div>
		</div>

		<div class="col-xl-2">
			<div class="row">
				<div class="col-xl-12 pl-5">
					<div class="icon">
						<i class='fas fa-desktop'></i>
					</div>
				</div>

				<div class="col-xl-12 pt-3 pb-3 text"><i>Well Equiped & Internert Labs</i></div>
			</div>
		</div>

		<div class="col-xl-2">
			<div class="row">
				<div class="col-xl-12 pl-5">
					<div class="icon">
						<i class='fas fa-landmark'></i>
					</div>
				</div>

				<div class="col-xl-12 pt-3 pb-3 text"><i>IT Seminars</i></div>
			</div>
		</div>

		<div class="col-xl-2">
			<div class="row">
				<div class="col-xl-12 pl-5">
					<div class="icon">
						<i class='fas fa-business-time'></i>
					</div>
				</div>

				<div class="col-xl-12 pt-3 pb-3 text"><i>Field Visits</i></div>
			</div>
		</div>

		<div class="col-xl-2">
			<div class="row">
				<div class="col-xl-12 pl-5">
					<div class="icon">
						<i class='fas fa-user-graduate'></i>
					</div>
				</div>

				<div class="col-xl-12 pt-3 pb-3 text"><i>Experienced Instructors</i></div>
			</div>
		</div>

	</div>

</section>
<!------------------------OUR AMNITIES END------------------->





<!--------------------------INTERNSHIP TOPIC START-------------------------->
<section class="container-fluid p-5 text-center" style="background-color: white;">
	<div class="row">
		<div class="col-xl-12" style="color: darkslategray; border-bottom: 1px solid #082941;">
			<h4>Some of our Sucess History</h4>
		</div>
	</div>
</section>
<!------------------------INTERNSHIP TOPIC END---------------------------->


<!------------------------INTERNSHIP START------------------>
<section class="container-fluid p-5">
	<div class="row">
		<div class="col-xl-12">
    <p>We believe that studying and working platform are totally different .
    To let students experience that difference in platform we offer them Internship/Job programme.
    Joining a company as an Intern/Job gives you the opportunity to work hands on in a professional 
    environment .
    As an Intern/Job you're not just there to get coffee or run errands 
    but you're there to gain actual work experience .</p>

			<div class="row intern">

				<div class="col-xl-3">
					<div class="go"></div>
				</div>
        <div class="col-xl-3">
					<div class="go"></div>
				</div><div class="col-xl-3">
					<div class="go"></div>
				</div><div class="col-xl-3">
					<div class="go"></div>
				</div>
			</div>
	</div>
  <div class="col-xl-12 mt-2 text-right">
					<a href="career-training"><button type="button" class="btn btn-secondary" style="color: white;">Know More</button></a>
				</div>
</section>
<!------------------------INTERNSHIP END-------------------->



<!--------------------------JOB PARTNER TOPIC START-------------------------->
<section class="container-fluid p-5 text-center" style="background-color: white;">
	<div class="row">
		<div class="col-xl-12" style="color: darkslategray; border-bottom: 1px solid #082941;">
			<h4>OUR JOB PARTNERS</h4>
		</div>
	</div>
</section>
<!------------------------JOB PARTNER TOPIC END---------------------------->


<!------------------------JOB PARTNERS START----------------->
<section class="container-fluid pb-5 pr-5 pl-5">
	<div class="row job">
		

	</div>
</section>
<!------------------------JOB PARTNERS END------------------->



<!--------------------------ONLINE FORM TOPIC START-------------------------->
<section id="online_form" class="container-fluid p-5 text-center" style="background-color: white;">
	<div class="row">
		<div class="col-xl-12" style="color: darkslategray; border-bottom: 1px solid #082941;">
			<h4>ONLINE FORM</h4>
		</div>
	</div>
</section>
<!------------------------ONLINE FORM TOPIC END---------------------------->


<!------------------------ONLINE FORM START------------------------>
<section class="container-fluid">
	<div class="container contact-form">
            
  <form style="border: 1px solid silver; border-radius: 10px; padding: 10px;" action="php/form_process.php" method="POST">


    <h6 style="text-align: center;">Below is the form you are looking for .</h6><br>

      <div class="row">

        <div class="col-xl-3">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name *" required="" />
          </div>
        </div>

        <div class="col-xl-3">
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Your Email *"/>
          </div>
        </div>

        <div class="col-xl-3">
          <div class="form-group">
            <input type="tel" name="tel" class="form-control" placeholder="Your Phone Number *" required="" />
          </div>
        </div>

        <div class="col-xl-3">
          <div class="form-group">
            <input type="text" name="address" class="form-control" placeholder="Your Current Address *" required="" />
          </div>
        </div>

      </div>


      <div class="row">

        <div class="col-xl-3">
          <div class="form-group">
            <select type="text" name="qualification" class="form-control" required="">
              <option value="--">Education Qualification</option>
              <option value="SLC/SEE">SLC/SEE</option>
              <option value="Diploma">Diploma</option>
              <option value="+2">+2</option>
              <option value="Bachelors">Bachelors</option>
              <option value="Masters">Masters</option>
            </select>
          </div>
        </div>

        <div class="col-xl-3">
          <div class="form-group">
            <select type="text" name="field" class="form-control" required="">
              <option value="--">Intrested Course</option>
              <option value="Office Administrator">Office Administrator</option>
              <option value="Software Developer">Software Developer</option>
              <option value="Engineering">Engineering</option>
              <option value="Graphic Designer">Graphic Designer</option>
              <option value="Game Developer">Game Developer</option>
              <option value="Database Adminsitrator">Database Adminsitrator</option>
              <option value="web Developer">Web Developer</option>
              <option value="Embedded Developer">Embedded Developer</option>
              <option value="Cyber Security Expert">Cyber Security Expert</option>
              <option value="System Adminsitrator">System Administrator</option>
              <option value="Hardware Expert">Hardware Expert</option>
            </select>
          </div>
        </div>

        <!--<div class="col-xl-3">-->
        <!--  <div class="form-group">-->
        <!--    <select type="text" name="txtField" class="form-control" required="">-->
        <!--      <option value="">Optional Course 1</option>-->
        <!--      <option value="">IT</option>-->
        <!--    </select>-->
        <!--  </div>-->
        <!--</div>-->

        <!--<div class="col-xl-3">-->
        <!--  <div class="form-group">-->
        <!--    <select type="text" name="txtField" class="form-control" required="">-->
        <!--      <option value="">Optional Course 2</option>-->
        <!--      <option value="">IT</option>-->
        <!--    </select>-->
        <!--  </div>-->
        <!--</div>-->

      </div>


        <div class="row"> 
        <div class="g-recaptcha" data-sitekey="6LdL05sUAAAAAB88a6SNpUGFczJMY7iS8Xr_Y32g" style="margin-left: 37%;"></div>
        <div class="col-xl-12" style="text-align: center;">
          <div class="form-group">
              <input type="submit" name="submit" class="btnContact" value="SUBMIT FORM" />
          </div>
          </div>                  
        </div>
    </form>
</div><br><br><br>
</section>
<!------------------------ONLINE FORM END-------------------------->




<!--------------------------STUDENTS SAYING TOPIC START-------------------------->



   
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<div class="container-fluid px-3 px-sm-5 my-5 text-center">
    <h4 class="mb-5 font-weight-bold">What Our Client Say</h4>
    <div class="owl-carousel owl-theme">
        <div class="item first prev">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center" style="border:none;"> <img src="https://i.imgur.com/gazoShk.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">Marielle Haag</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item show">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center" style="border:none;"> <img src="https://i.imgur.com/oW8Wpwi.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">Ximena Vegara</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item next">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center" style="border:none;"> <img src="https://i.imgur.com/ndQx2Rg.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">John Paul</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item last">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center" style="border:none;"> <img src="https://i.imgur.com/T5aOhwh.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">William Doe</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
    </div>
</div>





<script>


$(document).ready(function() {

$('.owl-carousel').owlCarousel({
mouseDrag:false,
loop:true,
margin:2,
nav:true,
responsive:{
0:{
items:1
},
600:{
items:1
},
1000:{
items:3
}
}
});

$('.owl-prev').click(function() {
$active = $('.owl-item .item.show');
$('.owl-item .item.show').removeClass('show');
$('.owl-item .item').removeClass('next');
$('.owl-item .item').removeClass('prev');
$active.addClass('next');
if($active.is('.first')) {
$('.owl-item .last').addClass('show');
$('.first').addClass('next');
$('.owl-item .last').parent().prev().children('.item').addClass('prev');
}
else {
$active.parent().prev().children('.item').addClass('show');
if($active.parent().prev().children('.item').is('.first')) {
$('.owl-item .last').addClass('prev');
}
else {
$('.owl-item .show').parent().prev().children('.item').addClass('prev');
}
}
});

$('.owl-next').click(function() {
$active = $('.owl-item .item.show');
$('.owl-item .item.show').removeClass('show');
$('.owl-item .item').removeClass('next');
$('.owl-item .item').removeClass('prev');
$active.addClass('prev');
if($active.is('.last')) {
$('.owl-item .first').addClass('show');
$('.owl-item .first').parent().next().children('.item').addClass('prev');
}
else {
$active.parent().next().children('.item').addClass('show');
if($active.parent().next().children('.item').is('.last')) {
$('.owl-item .first').addClass('next');
}
else {
$('.owl-item .show').parent().next().children('.item').addClass('next');
}
}
});

});
</script>


   
<!------------------------STUDENTS SAYING TOPIC END---------------------------->

<!------------------------STUDENTS SAYING------------------->

<div class="section-bg style-1" style="background-image: url('o/images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-mortarboard"></span>
            <h3>Our Philosphy</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-school-material"></span>
            <h3>Academics Principle</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
              Dolore, amet reprehenderit.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-library"></span>
            <h3>Key of Success</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
              Dolore, amet reprehenderit.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="news-updates">
      <div class="container">
         
        <div class="row">
          <div class="col-lg-9">
             <div class="section-heading">
              <h2 class="text-black">News &amp; Updates</h2>
              <a href="#">Read All News</a>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="post-entry-big">
                  <a href="news-single.html" class="img-link"><img src="o/images/blog_large_1.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta"> 
                      <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="news-single.html" class="img-link mr-4"><img src="o/images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                  </div>
                </div>

                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="news-single.html" class="img-link mr-4"><img src="o/images/blog_2.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                  </div>
                </div>

                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="news-single.html" class="img-link mr-4"><img src="o/images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="section-heading">
              <h2 class="text-black">Campus Videos</h2>
              <a href="#">View All Videos</a>
            </div>
            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
              <span class="play">
                <span class="icon-play"></span>
              </span>
              <img src="images/course_5.jpg" alt="Image" class="img-fluid">
            </a>
            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                <span class="play">
                  <span class="icon-play"></span>
                </span>
                <img src="o/images/course_5.jpg" alt="Image" class="img-fluid">
              </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section ftco-subscribe-1" style="background-image: url('o/images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2>Subscribe to us!</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>
          </div>
          <div class="col-lg-5">
            <form action="" class="d-flex">
              <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
              <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div> 
<!------------------------STUDENTS SAYING------------------->




</div>

     <!-- <footer> -->

     @include('includes.footer')

<!-- </footer>  -->



<script>
	$('.carousel').carousel({
    cycle: true,
    pause: "null"
})
</script>

<script src="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>

<script type="text/javascript">
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    items:3,
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
});
</script>

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); 
}
</script>


<script src="js/miss.js"></script>

</body>
</html>