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
	<div class="container-fluid">

		
			<div class="container-fluid courses">
				<div class="row">

					<!-- Courses Main Content -->
					
						<div class="courses_search_container col-lg-12">
							<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
								
								
							<select id="courses_search_select" class="courses_search_select courses_search_input col-sm-3 m-1" style="font-size:15px !important;">
								
									<option value="">All Categories</option>
									@if(isset($courseCategories))
										@foreach($courseCategories as $key => $courseCateory)
											<option value="{{$courseCateory->id}}">{{ $courseCateory->title }}</option>
										@endforeach
									@endif
								</select>
								
								<input type="search" list="brow" class="courses_search_input col-sm-6 m-1" placeholder="Search Courses" required="required"  style="font-size:15px !important;">
                                      <datalist id="brow">
									@if(isset($courses))
										@foreach($courses as $key => $course)
											<option value="{{ $course->title }}"></option>
										@endforeach
									@endif
								</datalist>
								<button action="submit" class="courses_search_button m-1 col-sm-3 ">search now</button>
							</form>
						</div>
					</div>
						<div class="row">
						<div class="courses_container">
							<div class="row courses_row">
								
								<!-- Course -->
								{{-- {{dd($courses)}} --}}
								@if(isset($courses))
									@foreach($courses as $key => $course)
										<div class="col-lg-3 course_col" style="display: inline-block !important;">
											<div class="course">
												<div class="course_image"><img src="{{asset('images/uploads/' . $course->image)}}" alt=""></div>
												<div class="course_body">
													<h3 class="course_title"><a href="{{route('frontend.course.details', $course->slug)}}">{{ $course->title }}</a></h3>
													<div class="course_teacher">{{ $course->lecturer }}</div>
													<div class="course_text">
														{!! \Illuminate\Support\Str::words($course->description, 20,'....')  !!}
												
													</div>

										           </div>

													<div class="row">
										<button   class="courses_details_button mt-2 ml-4  "><a href="{{route('frontend.course.details', $course->slug)}}">View details</a></button>
										<button  class="courses_details_button mt-2 ml-4"><a  href="{{url('online-admission')}}">Enroll now</a></button>

												</div>
											
												<!-- <div class="course_footer">
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
												</div> -->
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

	<nav aria-label="Page navigation example" style="font-size:15px;">
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
