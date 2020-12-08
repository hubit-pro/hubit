<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
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
<link rel="stylesheet" type="text/css" href="css/training/course-training.css">
</head>
<body>
<<<<<<< HEAD
@include('includes/navtraining') 
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

=======
{{-- @include('includes/navtraining')  --}}
@include('frontend.itTraining.common.include.nav')
>>>>>>> 5554cf4c4c86480dddae5cee48a141c39af88d53

<div class="super_container">

	<!-- Header -->

	
	
	<!-- Home -->
 
	<!-- <div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="home-training">Home</a></li>
								<li>Courses</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div> -->

	<!-- Courses -->

	<div class="courses">

		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="container-fluid">
					<div class="courses_search_container">
						<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							
							<select id="courses_search_select" class="courses_search_select courses_search_input">
								<option>All Categories</option>
								<option>Category</option>
								<option>Category</option>
								<option>Category</option>
							</select>
							<input type="search" list="brow" class="courses_search_input" placeholder="Search Courses" required="required">
                                      <datalist id="brow">
                                          <option value="Web development">
                                          <option value="App development">
                                          <option value="Graphic design">
                                          <option value="IT training">
                                          <option value="Networking">
                                        </datalist>  
								<button action="submit" class="courses_search_button ml-auto">search now</button>
						</form>
					</div>
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
							<div class="col-lg-3 course_col">
								<div class="course">
									<div class="course_image"><img src="img/course1.jpg" alt="" class="src"></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">Web development</a></h3>
										<div class="course_teacher">Mr. John Taylor</div>
										<div class="course_text">
											<p>Web Development Training in Butwal, Nepal</p>
										</div>
										<div class="row">
										<button   class="courses_search mt-2 ml-4  "><a href="course-details">View details</a></button>
										<button  class="courses_search mt-2 ml-4"><a  href="online-admission">Enroll now</a></button>

										</div>
									</div>
									<!-- <div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto">$130</div>
										</div> 
									</div> -->
								</div>
							</div>
							<!-- Course --> 
							<div class="col-lg-3 course_col">
								<div class="course">
									<div class="course_image"><img src="img/course2.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">App development</a></h3>
										<div class="course_teacher">Ms. Lucius</div>
										<div class="course_text">
											<p>Android App Development Training in Butwal, Nepal</p>
										</div>
										<div class="row">
										<button  href="course-details" class="courses_search mt-2 ml-4  ">View details</button>
										<button  href="online-admission" class="courses_search mt-2 ml-4">Enroll now</button>

										</div>
									</div>
									<!-- <div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto">Free</div>
										</div>
									</div> -->
								</div>
							</div>
							<!-- Course -->
							<div class="col-lg-3 course_col">
								<div class="course">
									<div class="course_image"><img src="img/course3.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">Graphic design</a></h3>
										<div class="course_teacher">Mr. Charles</div>
										<div class="course_text">
											<p>Graphic Design Training in Butwal, Nepal</p>
										</div>
										<div class="row">
										<button  href="course-details" class="courses_search mt-2 ml-4  ">View details</button>
										<button  href="online-admission" class="courses_search mt-2 ml-4">Enroll now</button>

										</div>
									</div>
									<!-- <div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto"><span>$320</span>$220</div>
										</div>
									</div> -->
								</div>
							</div>
							<!-- Course -->
							<div class="col-lg-3 course_col">
								<div class="course">
									<div class="course_image"><img src="img/course4.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">Networking</a></h3>
										<div class="course_teacher">Mr. John Taylor</div>
										<div class="course_text">
											<p>Networking Training in Butwal, Nepal</p>
										</div>
										<div class="row">
										<button  href="course-details" class="courses_search mt-2 ml-4  ">View details</button>
										<button  href="online-admission" class="courses_search mt-2 ml-4">Enroll now</button>

										</div>
									</div>
									<!-- <div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto">$130</div>
										</div>
									</div> -->
								</div>
							</div>
							<!-- Course -->
							<div class="col-lg-3 course_col">
								<div class="course">
									<div class="course_image"><img src="img/course2.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">IT training</a></h3>
										<div class="course_teacher">Ms. Lucius</div>
										<div class="course_text">
											<p>IT Training in Butwal, Nepal</p>
										</div>
										<div class="row">
										<button  href="course-details" class="courses_search mt-2 ml-4  ">View details</button>
										<button  href="online-admission" class="courses_search mt-2 ml-4">Enroll now</button>

										</div>
									</div>
									<!-- <div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto">Free</div>
										</div>
									</div> -->
								</div>
							</div>
							<!-- Course -->
							<div class="col-lg-3 course_col">
								<div class="course">
									<div class="course_image"><img src="img/course1.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">Software training</a></h3>
										<div class="course_teacher">Mr. Charles</div>
										<div class="course_text">
											<p>Software Training in Butwal, Nepal</p>
										</div>
										<div class="row">
										<button  href="course-details" class="courses_search mt-2 ml-4  ">View details</button>
										<button  href="online-admission" class="courses_search mt-2 ml-4">Enroll now</button>

										</div>
									</div>
									<!-- <div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto"><span>$320</span>$220</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						
						
					</div>
				</div>

				<!-- Courses Sidebar -->
				<!-- <div class="col-lg-3">
					<div class="sidebar"> -->

						<!-- Categories -->
				<!-- <div class="col-lg-3">

						<div class="sidebar_section">
							<div class="sidebar_section_title text-center .bg-sucess">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Send us Enquiry</div>
							<div class="sidebar_categories">
								<ul>
									<li><input type="text" placeholder="Your full name" style="width: 100%; border:none;" required></li>
									<li><input type="email" placeholder="Your email" style="width: 100%; border:none;" required></li>
									<li><input type="tel" placeholder="Your mobile No." style="width: 100%; border:none;" required></li>
									<li><input type="text" placeholder="Your enquiry" style="width: 100%; border:none;" required></li>
									<li><input type="submit" value="Send" style="width: 100%; border:none;"></li>
								</ul>
							</div>
						</div>
</div>-->

					</div>
				</div>
			</div>
		</div>
	</div>

	
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

@include('includes/footer')
<script>
	
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


</script>


<script src="unicat/js/jquery-3.2.1.min.js"></script>
<script src="unicat/styles/bootstrap4/popper.js"></script>
<script src="unicat/styles/bootstrap4/bootstrap.min.js"></script>
<script src="unicat/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="unicat/plugins/easing/easing.js"></script>
<script src="unicat/plugins/parallax-js-master/parallax.min.js"></script>
<script src="unicat/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="unicat/js/courses.js"></script>
</body>
</html>