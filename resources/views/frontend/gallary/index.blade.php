@extends('frontend.common.layout.app')
@section('title', 'Gallary')
@push('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/home/gallery.css')}}">
@endpush
@section('content')

<div class = "counter-overlay"></div>
<div class="container-fluid text-center banner" id = "client">
  <h1>Our Clients</h1>
  <p> <i class="fas fa-quote-left mr-3" style="color:red ;"></i>We are continuously improving our service deliverables, 
    working methodologies and injecting new technologies 
   in our service base .<i class="fas fa-quote-right ml-3 " style="color:red ;"></i> </p>
</div>

<!-- Grid row -->

<div class="row m-3" >
	<div class="col-md-2">
		<div class="sidebar">
		  @if(isset($gallaryCategory))
		  	<a class="active gallary-category" href="#">{{ strtoupper($gallaryCategory->title) }}</a>
		  @endif
		  @if(isset($gallarySubCategories))
		  @foreach($gallarySubCategories as $key => $gallarySubCategory)
		    <a href="#{{$gallarySubCategory->slug}}" class="gallary-sub-category" data-slug="{{$gallarySubCategory->slug}}">{{ $gallarySubCategory->title }}</a>
		  @endforeach
		  @endif

		</div>
	</div>
	  <!-- Grid column -->
	<div class="col-md-10">
		<div class="row">
		@if(isset($gallaries))
		@foreach($gallaries as $gallary)
		  <div class="col-lg-3 col-md-6 mt-3 gallary-{{$gallary->subCategory->slug}} gallary">
		    <!--Modal: Name-->
		    <div class="modal fade" id="modal{{$gallary->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		      <div class="modal-dialog modal-lg" role="document">
		        <!--Content-->
		        <div class="modal-content">
		          <!--Body-->
		          <div class="modal-body mb-0 p-0">
		            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
		              <iframe class="embed-responsive-item" src="{{asset('images/uploads/'. $gallary->image)}}"  allowfullscreen></iframe>
		            </div>

		          </div>
		          <div class="modal-footer justify-content-center">
		          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
		            <!--Twitter-->
		            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
		            <!--Google +-->
		            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
		            <!--Linkedin-->
		            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
		          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
		          </div>
		        </div>
		      </div>
	   		</div>
		    <!--Modal: Name-->
		    <div class="hover">
		    	<a>
			    	<img class="img-fluid " src="{{asset('images/uploads/'. $gallary->image)}}" alt="img"
			        data-toggle="modal" data-target="#modal{{$gallary->id}}">
			        <div class="middle"><p class="text">{{$gallary->name}}</p></div>
		        </a>
		    </div>
		  </div>
		 @endforeach
		@endif
		</div>
	</div>
</div>
<nav aria-label="Page navigation example " style="margin:auto; text-align:center">
 {{--  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul> --}}
{{ $gallaries->links() }}
</nav>

@endsection

@push('script')
<script type="text/javascript">
	let $gallaryCategory = $('.gallary-category')
	let $gallarySubCategory = $('.gallary-sub-category')

	$gallaryCategory.on('click', function() {
		$('.gallary').show()
	})

	$gallarySubCategory.on('click', function() {
		let subCategorySlug = $(this).data('slug')

		$('.gallary').show()
		$('.gallary-'+subCategorySlug).hide()
	})
</script>
@endpush