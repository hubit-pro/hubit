<!DOCTYPE html>
<html>
<head>
	@include("includes/traininghead")
  <link rel="stylesheet" type="text/css" href=" css/training/home-training.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



</head> 
<body  style="zoom:80%"> 

<!-----------------------NAVBAR------------------------------->
@include('includes/navtraining')
<!-------------------------NAVBAR END--------------------------------->


<!-----------------------------SLIDER----------------------->


<div class="container-fluid main-div">
  <div class="container-fluid">
  
  
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img/it.jpg" alt="Los Angeles" >
  </div>
  <div class="carousel-item">
    <img src="img/it1.jpg" alt="Chicago" >
  </div>
  <div class="carousel-item">
    <img src="img/it2.jpg" alt="New York" >
  </div>
</div>




    <!-- Left and right controls -->
  
  </div>
</div>

<div class="container-fluid">
<form action="/action_page.php" class="containers">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
  </div>


  </div>

<!--------------------------SLIDER END------------------------>
<div class="containter-fluid">
  <div class="passion">
       <p id="txt-1">
          Our Amenities
      </p>
      <hr style="width: 50%; height: 2px; background-color: #ff9800;border-radius: 13px;">
  </div>
</div>



<div class="card-container" onclick="location.href='courses';">
  <div class="card">
    <div class="content-box">
      <h3>Projector Classrooms</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>Internet Labs</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>IT Seminars</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>Field Visits/Works</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>Experienced Instructors</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>Internships</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>Bootcamps</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>IT Workshops</h3>
    </div>
  </div>
</div>


 

<!-------------------------TEXT CONTAINER-------------------->


<div class="container-fluid our-alumini">
  <h1 style="text-align:center; margin-top:50px; font-size:40px;">Our Students</h1><hr>
	<div class="row">
		<div class="col-md-3">
			<div class="content">
				<img src="https://labanepal.com/assets/front/images/svg/graduation-hat.svg">
				<div class="stat-number" data-n="200">
        <span class="Single">Lorem ipsum</span>
                  <span class="Single">0</span>
                </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="content">
				<img src="https://labanepal.com/assets/front/images/svg/connection.svg">
                <div class="stat-number" data-n="60">
        <span class="Single">Lorem ipsum</span>
        <span class="Single">0</span>

                  
                </div>

			</div>
		</div>
		<div class="col-md-3">
			<div class="content">
				<img src="https://labanepal.com/assets/front/images/svg/university-lecture.svg">
                <div class="stat-number" data-n="10">
                <span class="Single">Lorem ipsum</span>
        <span class="Single">0</span>
                </div>

			</div>
		</div>
		<div class="col-md-3">
			<div class="content">
				<img src="https://labanepal.com/assets/front/images/svg/open-book.svg">
                <div class="stat-number" data-n="10000">
                <span class="Single">Lorem ipsum</span>
        <span class="Single">0</span>
                </div>

			</div>
		</div>

	</div>
</div>





<div class="container-fluid our-values text-center">
    <div class="row">
    <div class="col" >
        <h1>Our values</h1><hr>
    </div>
    <div class="row">
        <div class="col-md-3">
        <img src="https://cdn01.alison-static.net/public/html/site/img/empowerment.png">
        <div class="content">
            <h4>Empowerment</h4>
            <p>We are driven by our belief in the power of free education and skills training to change
                 people’s lives for the better and are passionate about providing an
                 overall learning experience that meets their needs and helps them to achieve life goals.</p>
                </div>
         
        </div>
        <div class="col-md-3">
        <img src="https://cdn01.alison-static.net/public/html/site/img/knowledge.png">
        <div class="content">
        <h4>Knowledge</h4>


            <p>We are experts in the field of online education and are rigorous in 
                delivering high quality learning materials,
                 services and experiences that deliver the learning outcomes we have promised.</p>
                </div>

        </div>
        <div class="col-md-3">
            <img src="https://cdn01.alison-static.net/public/html/site/img/inclusivity.png" >
        <div class="content">
        <h4>Inclusivity</h4>


            <p>We are inspired by the UN Declaration that “everyone is entitled
                 to a free education”. We are committed to equality and access
                 to education irrespective of gender, geography, economic status or any other barriers 
                 to access.</p>
                </div>

        </div>
        <div class="col-md-3">
                <img src="https://cdn01.alison-static.net/public/html/site/img/innovation.png" >

        <div class="content">
        <h4>Innovation</h4>


            <p>We will not be constrained by what already exists but will lead
                 the way in introducing new ways to achieve our mission. Our DNA is
                 entrepreneurial and we understand and embrace the pioneering spirit that
                  motivates other entrepreneurs.</p>
                </div>
            
        </div>

    </div>

    </div>


</div>



<div class="container-fluid px-3 px-sm-5 my-5 text-center">
    <h1 class="mb-5 font-weight-bold" style="font-size:40px;">What Our Client Say <hr></h1>
    <div class="owl-carousel owl-theme">
        <div class="item show">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="https://i.imgur.com/gazoShk.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h4 class="mb-3 mt-2 font-weight-bold">Marielle Haag</h4>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item show">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="https://i.imgur.com/oW8Wpwi.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h4 class="mb-3 mt-2 font-weight-bold">Ximena Vegara</h4>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item show">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="https://i.imgur.com/ndQx2Rg.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h4 class="mb-3 mt-2 font-weight-bold">John Paul</h4>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item show">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="https://i.imgur.com/T5aOhwh.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h4 class="mb-3 mt-2 font-weight-bold">William Doe</h4>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid course">
  <h1 >COURSE</h1><hr>
  <div class="row">
    <div class="col">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="img/about1.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title font-weight-bold">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="img/about1.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title font-weight-bold">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="img/about1.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title font-weight-bold">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="img/about1.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title font-weight-bold">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="img/about1.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title font-weight-bold">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="img/about1.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title font-weight-bold">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


<div class="col">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="img/about1.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title font-weight-bold">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>
</div>








<h1 class="landing-photo-gallery text-center " style="margin-top:100px;">our-patners
<hr>
</h1>
<section class="container-fluid p-5">
  
<div class="slick marquee">
  <div class="slick-slide">
    <div class="inner">
    <img src="img/award5.jpg" class="img-fluid ml-3" alt="12">
    </div>
  </div>
  <div class="slick-slide">
    <div class="inner">
    <img src="img/award.png" class="img-fluid ml-3" alt="12">
    </div>
  </div>
  <div class="slick-slide">
    <div class="inner">
    <img src="img/award2.jpg" class="img-fluid ml-3" alt="12">
    </div>
  </div>
  <div class="slick-slide">
    <div class="inner">
    <img src="img/award3.png" class="img-fluid ml-3" alt="12">
    </div>
  </div>
  <div class="slick-slide">
    <div class="inner">
    <img src="img/award4.png" class="img-fluid ml-3" alt="12">
    </div>
  </div>
 
  
</div>


</section>




<!-- ready to get started start -->

<div class="container-fluid connect">
<h2>READY TO GET STARTED?</h2>
<p>Access Startup Institute's network of vetted coding, design, marketing, and sales talent.</p>
<button type="submit" class="btn btn-primary mb-2  ">Hire now</button>
   

</div>
<!-- ready to get started end -->




<!-- footer -->
@include('includes/footer')
<!-- footer -->


<script>


jQuery(document).ready(function($) {
  $('.slick.marquee').slick({
    speed:5000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false
  });
});

















$(document).ready(function() {

$('.owl-carousel').owlCarousel({
  
  

    // autoplay:true,
    // autoplayTimeout:2500,
    // autoplayHoverPause:true
mouseDrag:false,
loop:true,
margin:2,
nav:true,
autoplay:true,
autoplayTimeout:2000,
autoplayHoverPause:true,
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


</body>
</html>