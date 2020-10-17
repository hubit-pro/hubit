@extends('frontend.itSolution.common.layout.app')
@section('title', 'Service')
@push('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/top-header.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/solution/navsolution.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
@endpush
@section('content')
<!--------------------------NON-SLIDER----------------------->
<section class="container-fluid p-0 non" style="position: relative;">

  <img src="{{asset('img/train.jpg')}}">
<!-------------------------TEXT CONTAINER-------------------->
  <section class="container-fluid" id="topper"><!--this id "topper" is the transparent box over the slider--->
    <div class="row pt-5 pb-4 rib">
    <div class="row">
      <div class="col-xl-12 text-center" style="color: white;">
        <h3>Solution-->Services</h3>
      </div>
    </div>
  </section>
</section>
<!-------------------------TEXT CONTAINER END---------------->

<!--------------------------0UR AMENITIES TOPIC------------------------------>
<section class="container-fluid p-5 text-center" style="background-color: white;">
  <div class="row">
    <div class="col-xl-12" style="color: darkslategray; border-bottom: 1px solid #082941;">
      <h4>SCOPE OF OUR SERVICES</h4>
    </div>
  </div>
</section>
<!------------------------OUR AMENITIES TOPIC END---------------------------->

<!--------------------------------------------------------------------->
<section class="container-fluid pb-5">
     <div id="veaw-pot">
       <div id="veaw-pot1">
       	@if(isset($services))
       	@foreach($services as $key => $service)
       		@if ($key % 2 == 0)
		        <div class="row cmt-cont">
		            <div class="col-xl-12  text-center cmt-cont-h3">
		              <h4>{{$service->title}}</h4>
		            </div>
		            <div class="col-xl-9 p-4 text-justify">
		              <div class="cmt-cont-child animated standby slideInLeft" data-delay="500">
		                {!! $service->description !!}
		              </div>  
		          	</div>
		            <div class="col-xl-3 p-4 cmt-cont-img animated standby slideInRight" data-delay="500" id="cmt-cont-img1">
		                <img style="height: 150px; width: 100%;" src="{{asset('images/uploads/'. $service->image)}}">
		            </div>
		        </div>
		    @else
		        <div class="row cmt-cont">
		            <div class="col-xl-12  text-center cmt-cont-h3">
		              <h4>{{$service->title}}</h4>
		            </div>
		            <div class="col-xl-3 p-4 cmt-cont-img animated standby slideInLeft gofgof" data-delay="1000" id="cmt-cont-img2">
		                <img style="height: 150px; width: 100%;" src="{{asset('images/uploads/'. $service->image)}}">
		            </div>
		            <div class="col-xl-9 p-4 text-justify">
		              <div class="cmt-cont-child animated standby slideInLeft" data-delay="500">
		                {!! $service->description !!}
		              </div>  
		          	</div>
		        </div>
		    @endif
        @endforeach
        @endif
      </div>
    </div>
</section>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/jquery-css3-animation-queue.js')}}"></script>
@endpush