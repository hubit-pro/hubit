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
@include('includes/navtraining') 

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
				<div class="col-lg-8">
					<div class="courses_search_container">
						<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<input type="search" list="brow" class="courses_search_input" placeholder="Search Courses" required="required">
							
                                      <datalist id="brow">
                                          <option value="Internet Explorer">
                                          <option value="Firefox">
                                          <option value="Chrome">
                                          <option value="Opera">
                                          <option value="Safari">
                                        </datalist>  

							<select id="courses_search_select" class="courses_search_select courses_search_input">
								<option>All Categories</option>
								<option>Category</option>
								<option>Category</option>
								<option>Category</option>
							</select>
							<button action="submit" class="courses_search_button ml-auto">search now</button>
						</form>
					</div>
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="unicat/images/course_4.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">Software Training</a></h3>
										<div class="course_teacher">Mr. John Taylor</div>
										<div class="course_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
										</div>
									</div>
									<div class="course_footer">
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
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="unicat/images/course_5.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">Developing Mobile Apps</a></h3>
										<div class="course_teacher">Ms. Lucius</div>
										<div class="course_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
										</div>
									</div>
									<div class="course_footer">
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
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="unicat/images/course_6.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">Starting a Startup</a></h3>
										<div class="course_teacher">Mr. Charles</div>
										<div class="course_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
										</div>
									</div>
									<div class="course_footer">
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
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="unicat/images/course_7.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">Learn Basic German Fast</a></h3>
										<div class="course_teacher">Mr. John Taylor</div>
										<div class="course_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
										</div>
									</div>
									<div class="course_footer">
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
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="unicat/images/course_8.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">Business Groud Up</a></h3>
										<div class="course_teacher">Ms. Lucius</div>
										<div class="course_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
										</div>
									</div>
									<div class="course_footer">
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
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="unicat/images/course_9.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course-details">Java Technology</a></h3>
										<div class="course_teacher">Mr. Charles</div>
										<div class="course_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
										</div>
									</div>
									<div class="course_footer">
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
									</div>
								</div>
							</div>

						</div>
						<div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
									<div class="courses_show_container ml-auto clearfix">
										<div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
										<div class="courses_show_content">
											<span>Show: </span>
											<select id="courses_show_select" class="courses_show_select">
												<option>06</option>
												<option>12</option>
												<option>24</option>
												<option>36</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_section_title center">Send us Enquiry</div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="#">Art & Design</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">IT & Software</a></li>
									<li><a href="#">Languages</a></li>
									<li><a href="#">Programming</a></li>
								</ul>
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Latest Courses</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="unicat/images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course-details">How to Design a Logo a Beginners Course</a></div>
										<div class="latest_price">Free</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="unicat/images/latest_2.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course-details">Photography for Beginners Masterclass</a></div>
										<div class="latest_price">$170</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="unicat/images/latest_3.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course-details">The Secrets of Body Language</a></div>
										<div class="latest_price">$220</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Gallery -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Instagram</div>
							<div class="sidebar_gallery">
								<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="unicat/images/gallery_1_large.jpg">
											<img src="unicat/images/gallery_1.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="unicat/images/gallery_2_large.jpg">
											<img src="unicat/images/gallery_2.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="unicat/images/gallery_3_large.jpg">
											<img src="unicat/images/gallery_3.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="unicat/images/gallery_4_large.jpg">
											<img src="unicat/images/gallery_4.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="unicat/images/gallery_5_large.jpg">
											<img src="unicat/images/gallery_5.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="unicat/images/gallery_6_large.jpg">
											<img src="unicat/images/gallery_6.jpg" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Tags -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Tags</div>
							<div class="sidebar_tags">
								<ul class="tags_list">
									<li><a href="#">creative</a></li>
									<li><a href="#">unique</a></li>
									<li><a href="#">photography</a></li>
									<li><a href="#">ideas</a></li>
									<li><a href="#">wordpress</a></li>
									<li><a href="#">startup</a></li>
								</ul>
							</div>
						</div>

						<!-- Banner -->
						<div class="sidebar_section">
							<div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
								<div class="sidebar_banner_background" style="background-image:url(unicat/images/banner_1.jpg)"></div>
								<div class="sidebar_banner_overlay"></div>
								<div class="sidebar_banner_content">
									<div class="banner_title">Free Book</div>
									<div class="banner_button"><a href="#">download now</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="unicat/images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">sign up for news and offers</div>
							<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	
</div>
@include('includes/footer')


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