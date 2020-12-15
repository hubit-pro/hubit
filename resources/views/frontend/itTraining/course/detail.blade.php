<!DOCTYPE html>
<html lang="en">
<head>
<title>Course Details</title>
@include('includes/traininghead')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('unicat/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('unicat/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('unicat/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('unicat/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('unicat/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('unicat/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/training/course-details.css')}}">
</head>
<body>
{{-- @include('includes/navtraining') --}}
@include('frontend.itTraining.common.include.nav')

<div class="super_container">

	
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="{{route('frontend.course')}}">Courses</a></li>
								<li>Course Details</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">
					
					<div class="course_container">
						<div class="course_title">{{$course->title}}</div>
						<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Teacher:</div>
								<div class="course_info_text"><a href="#">{{$course->lecturer}}</a></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Reviews:</div>
								<div class="rating_r rating_r_{{$course->rating}}"><i></i><i></i><i></i><i></i><i></i></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Categories:</div>
								<div class="course_info_text"><a href="#">@if(isset($course->courseCategory)){{$course->courseCategory->title}}@endif</a></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image"><img src="unicat/images/course_image.jpg" alt=""></div>

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
									<div class="tab_panel_title">{{$course->title}}</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											{!! $course->description !!}
										</div>
										{{-- <div class="tab_panel_section">
											<div class="tab_panel_subtitle">Requirements</div>
											<ul class="tab_panel_bullets">
												<li>Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent.</li>
												<li>Cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a.</li>
												<li>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</li>
												<li>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</li>
											</ul>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">What is the target audience?</div>
											<div class="tab_panel_text">
												<p>This course is intended for anyone interested in learning to master his or her own body.This course is aimed at beginners, so no previous experience with hand balancing skillts is necessary Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
											</div>
										</div> --}}
										<div class="tab_panel_faq">
											<div class="tab_panel_title">FAQ</div>

											<!-- Accordions -->
											<div class="accordions">
												
												<div class="elements_accordions">

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Can I just enroll in a single course?</div></div>
														<div class="accordion_panel">
															<p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center active"><div>I'm not interested in the entire Specialization?</div></div>
														<div class="accordion_panel">
															<p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>What is the refund policy?</div></div>
														<div class="accordion_panel">
															<p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>What background knowledge is necessary?</div></div>
														<div class="accordion_panel">
															<p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Do i need to take the courses in a specific order?</div></div>
														<div class="accordion_panel">
															<p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
														</div>
													</div>

												</div>

											</div>
										</div>
									</div>
								</div>

								<!-- Curriculum -->
								<div class="tab_panel tab_panel_2">
									<div class="tab_panel_content">
										<div class="tab_panel_title">{{$course->title}}</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
												{!! $course->description !!}
											</div>

											<!-- Dropdowns -->
											<ul class="dropdowns">
												@if(isset($curriculums))
												@foreach($curriculums as $key => $curriculum)
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Lecture {{$key}}:</span> {{$curriculum->title}}</div>
														<div class="dropdown_item_text">
															{!! $curriculum->description !!}
														</div>
													</div>
													<ul>
														@foreach($curriculums1 as $index => $curriculum1)
														@if($curriculum1->course_type == $curriculum->id)
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Lecture {{$key}}.{{$index}}:</span>{{$curriculum1->title}}</div>
																<div class="dropdown_item_text">
																	{!! $curriculum1->description !!}
																</div>
															</div>
														</li>
														@endif
														@endforeach
														{{-- <li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Lecture 1.2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
																<div class="dropdown_item_text">
																	<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
																</div>
															</div>
														</li> --}}
													</ul>
												</li>
												@endforeach
												@endif
												{{-- <li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Lecture 2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
														<div class="dropdown_item_text">
															<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Lecture 2.1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
																<div class="dropdown_item_text">
																	<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Lecture 2.2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
																<div class="dropdown_item_text">
																	<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
																</div>
															</div>
														</li>
													</ul>
												</li> --}}
												{{-- <li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Lecture 3:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
														<div class="dropdown_item_text">
															<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Lecture 4:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
														<div class="dropdown_item_text">
															<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Lecture 5:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
														<div class="dropdown_item_text">
															<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
														</div>
													</div>
												</li> --}}
											</ul>
										</div>
									</div>
								</div>

								<!-- Reviews -->
								<div class="tab_panel tab_panel_3">
									<div class="tab_panel_title">Course Review</div>

									<!-- Rating -->
									<div class="review_rating_container">
										<div class="review_rating">
											<div class="review_rating_num">{{$course->rating}}</div>
											<div class="review_rating_stars">
												<div class="rating_r rating_r_{{$course->rating}}"><i></i><i></i><i></i><i></i><i></i></div>
											</div>
											<div class="review_rating_text">(28 Ratings)</div>
										</div>
										<div class="review_rating_bars">
											<ul>
												<li><span>5 Star</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
												<li><span>4 Star</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
												<li><span>3 Star</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
												<li><span>2 Star</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
												<li><span>1 Star</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
											</ul>
										</div>
									</div>
									
									<!-- Comments -->
									<div class="comments_container">
										<ul class="comments_list">
											<li>
												<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
													<div class="comment_image"><div><img src="unicat/images/comment_1.jpg" alt=""></div></div>
													<div class="comment_content">
														<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author"><a href="#">Milley Cyrus</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">1 day ago</div>
														</div>
														<div class="comment_text">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
														</div>
														<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
															<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
															<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
														</div>
													</div>
												</div>
												<ul>
													<li>
														<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
															<div class="comment_image"><div><img src="unicat/images/comment_2.jpg" alt=""></div></div>
															<div class="comment_content">
																<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_author"><a href="#">John Tyler</a></div>
																	<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
																	<div class="comment_time ml-auto">1 day ago</div>
																</div>
																<div class="comment_text">
																	<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
																</div>
																<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
																	<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
													<div class="comment_image"><div><img src="unicat/images/comment_3.jpg" alt=""></div></div>
													<div class="comment_content">
														<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author"><a href="#">Milley Cyrus</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">1 day ago</div>
														</div>
														<div class="comment_text">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
														</div>
														<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
															<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
															<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
														</div>
													</div>
												</div>
											</li>
										</ul>
										<div class="add_comment_container">
											<div class="add_comment_title">Add a review</div>
											<div class="add_comment_text">You must be <a href="#">logged</a> in to post a comment.</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4">
				
					<div class="sidebar">
					

					  
						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_section_title text-center ">Course Feature</div>
							<div class="sidebar_feature">
								<!-- <div class="course_price">@if($course->fee) ${{$course->fee}} @else Free @endif</div> -->

								<!-- Features -->
							

								<!-- Features -->
								<div class="feature_list">

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Course-Duration:</span></div>
										<div class="feature_text ml-auto">2 weeks</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Class-Duration: </span></div>
										<div class="feature_text ml-auto">2 hours</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span>Avaiable Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
										<div class="feature_text ml-auto">6-8 AM , 8-10 AM , 10-12 AM , 12-2 PM , 2-4 PM , 4-6 PM , 6-8 PM </div>
									</div>

									

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>No.of students per Group</span></div>
										<div class="feature_text ml-auto">35</div>
									</div>

								</div>
							</div>
						</div>
						<div class="admission_btn text-center">
					  <button><a href="{{url('online-admission')}}">Get Admission</a></button>
					  </div>

						<!-- Feature -->
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
                    
					



						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title text-center mt-5">Latest Courses</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								@if(isset($latestCourses))
										@foreach($latestCourses as $key => $latestCourse)
											<div class="latest d-flex flex-row align-items-start justify-content-start">
												<div class="latest_image"><div><img src="{{asset('images/uploads/'. $latestCourse->image)}}" alt=""></div></div>
												<div class="latest_content">
													<div class="latest_title"><a href="{{route('frontend.course.details', $course->slug)}}">{{ $latestCourse->title }}</a></div>
													@if($latestCourse->fee) <div class="latest_price">${{ $latestCourse->fee }}</div> @else <div class="latest_price">Free</div> @endif
												</div>
											</div>
										@endforeach
									@endif
							</div>
						</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>          

	

			
	
</div>
@include('includes/footer')
<script src="{{asset('unicat/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('unicat/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('unicat/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('unicat/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('unicat/plugins/easing/easing.js')}}"></script>
<script src="{{asset('unicat/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('unicat/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('unicat/js/course.js')}}"></script>
</body>
</html>