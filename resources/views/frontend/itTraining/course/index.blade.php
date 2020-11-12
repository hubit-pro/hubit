@extends('frontend.itTraining.common.layout.app')
@section('title', 'Course')
@push('style')
	
  <link rel="stylesheet" type="text/css" href="{{asset('unicat/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('unicat/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('unicat/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('unicat/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('unicat/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('unicat/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/training/course-training.css')}}">
@endpush
@section('content')
	<div class="super_container">

		<div class="courses">
			<div class="container">
				<div class="row">

					<!-- Courses Main Content -->
					<div class="col-lg-8">
						<div class="courses_search_container">
							<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
								{{-- <input type="search" list="brow" class="courses_search_input" placeholder="Search Courses" required="required">
								
	                                      <datalist id="brow">
	                                          <option value="Internet Explorer">
	                                          <option value="Firefox">
	                                          <option value="Chrome">
	                                          <option value="Opera">
	                                          <option value="Safari">
	                                        </datalist>  --}} 

								
								<select id="select-category" class="courses_search_select courses_search_input select" style="font-size: 15px !important;">
									<option value="">All Categories</option>
									@if(isset($courseCategories))
										@foreach($courseCategories as $key => $courseCateory)
											<option value="{{$courseCateory->id}}">{{ $courseCateory->title }}</option>
										@endforeach
									@endif
								</select>
								<select id="select-course" class="courses_search_select courses_search_input" style="font-size: 15px !important;">
									<option value="">Search Courses</option>
									@if(isset($courses))
										@foreach($courses as $key => $course)
											<option value="">{{ $course->title }}</option>
										@endforeach
									@endif
								</select>
								<button action="submit" class="courses_search_button ml-auto">search now</button>
							</form>
						</div>
						<div class="courses_container">
							<div class="row courses_row">
								
								<!-- Course -->
								{{-- {{dd($courses)}} --}}
								@if(isset($courses))
									@foreach($courses as $key => $course)
										<div class="col-lg-6 course_col">
											<div class="course">
												<div class="course_image"><img src="{{asset('unicat/images/course_4.jpg')}}" alt=""></div>
												<div class="course_body">
													<h3 class="course_title"><a href="{{route('frontend.course.details', $course->slug)}}">{{ $course->title }}</a></h3>
													<div class="course_teacher">{{ $course->lecturer }}</div>
													<div class="course_text">
														{!! \Illuminate\Support\Str::words($course->description, 20,'....')  !!}
													</div>
												</div>
												<div class="course_footer">
													<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
														<div class="course_info">
															<i class="fa fa-graduation-cap" aria-hidden="true"></i>
															<span>{{$course->noOfStudent}} Student</span>
														</div>
														<div class="course_info">
															<i class="fa fa-star" aria-hidden="true"></i>
															<span>@if($course->rating) {{$course->rating}} @else 0 @endif Ratings</span>
														</div>
														<div class="course_price ml-auto">@if($course->strikFee)<span>${{ $course->strikFee}}</span>@endif @if($course->fee) ${{$course->fee}} @else Free @endif</div>
													</div>
												</div>
											</div>
										</div>
									@endforeach
								@endif
							</div>
							<div class="row pagination_row">
								<div class="col">
									<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
										{{ $courses->links() }}
										{{-- <ul class="pagination_list">
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
										</ul> --}}
										{{-- <div class="courses_show_container ml-auto clearfix">
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
										</div> --}}
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
								<div class="sidebar_section_title">Categories</div>
								<div class="sidebar_categories">
									<ul>
										@if(isset($courseCategories))
											@foreach($courseCategories as $key => $courseCateory)
												<li><a href="#">{{ $courseCateory->title }}</a></li>
											@endforeach
										@endif
									</ul>
								</div>
							</div>

							<!-- Latest Course -->
							<div class="sidebar_section">
								<div class="sidebar_section_title">Latest Courses</div>
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

							<!-- Gallery -->
							<div class="sidebar_section">
								<div class="sidebar_section_title">Instagram</div>
								<div class="sidebar_gallery">
									<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
										<li class="gallery_item">
											<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
											<a class="colorbox" href="unicat/images/gallery_1_large.jpg">
												<img src="{{asset('unicat/images/gallery_1.jpg')}}" alt="">
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

@endsection

@push('script')
<script type="text/javascript">
	let $selectedCategory = $('#select-category')
	let $selectedCourse = $('#select-course')
	let $clonedCourse = $selectedCategory.clone()

	// $selectedCategory.on('change', function() {
	// 	let categoryId = $selectedCourse.val()
	// 		console.log($clonedCourse.val())
	// 	if (categoryId == $clonedCourse.val()) {
	// 		$selectedCourse.appendTo($clonedCourse)
	// 	}
	// })
</script>
@endpush
