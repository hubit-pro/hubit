@extends('frontend.common.layout.app')
@section('title', 'Aboutus')
@push('style')
  <link rel="stylesheet" type="text/css" href="{{asset('css/home/about.css')}}">

<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endpush
@section('content')

  
<!-------------------------NAVBAR END--------------------------------->


<!--------------------------NON-SLIDER----------------------->
<section class="container-fluid non" style="position: relative;">

  <img src="https://royalrankings.ae/wp-content/uploads/2016/11/Website-Design-Background-1.jpg">


<!-------------------------TEXT CONTAINER-------------------->
  <section class="container-fluid" id="topper"><!--this id "topper" is the transparent box over the slider--->

    

    <div class="row">
      <div class="col-xl-12 text-center">
        <h3>About Us</h3>
      </div>
    </div>

  </section>

</section>
<!-------------------------TEXT CONTAINER END---------------->



<!---------------------ABOUT START---------------------------->
<section class="container-fluid p-5 desktop-view">

  <div class="row pl-5 pr-5 pb-5">
    <div class="col-xl-12 text-center head">
      <h3>{{$aboutusMain->title}}</h3>
    </div>
    <div class="col-xl-12 pt-3 text">
      {!! $aboutusMain->description !!}
    </div>
  </div>
@if(isset($aboutuses))
@foreach($aboutuses as $key => $aboutus)
  @if ($key % 2 == 0)
    <div class="row p-4 solution"> 
      <div class="col-xl-12">
        <div class="row">
          <div class="col-xl-9 text-justify"data-aos="fade-left">
            <h5>{{$aboutus->title}}</h5>
            {!! $aboutus->description !!}
          </div>
          <div class="col-xl-3 p-1 text-center" id= "img1" data-aos="fade-right">
            <img src="{{asset('images/uploads/'. $aboutus->image)}}">
          </div>
        </div>
      </div>
    </div>
  @else
    <div class="row p-4 solution">
      <div class="col-xl-12">
        <div class="row">
          <div class="col-xl-3 p-1 text-center"data-aos="fade-left"id= "img2">
            <img src="{{asset('images/uploads/'. $aboutus->image)}}">
          </div>
          <div class="col-xl-9 text-justify"data-aos="fade-right">
            <h5>{{$aboutus->title}}</h5>
            {!! $aboutus->description !!}
          </div>        
        </div>
      </div>
    </div>
  @endif
@endforeach
@endif

</section>
<!---------------------ABOUT END------------------------------>
<!---------------------ABOUT us mobile view start------------------------------>
<!-- About us mobile view end -->



<!-----------------------TESTIMONIALS----------------------------->
<div class="container-fluid px-3 px-sm-5 my-5 text-center">
    <h4 class="mb-5 font-weight-bold">What Our Client Say <hr></h4>
    <div class="owl-carousel owl-theme">
        @if(isset($clientSpeeches))
        @foreach($clientSpeeches as $client)
          @if($client->clientSpeech)
            <div class="item show">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center"> <img src="{{asset('images/uploads/'. $client->image)}}" class="img-fluid profile-pic mb-4 mt-3" alt="{{$client->image}}"> </div>
                    <h6 class="mb-3 mt-2">{{$client->companyName}}</h6>
                   {!! \Illuminate\Support\Str::words($client->clientSpeech, 15,'....')  !!}
                </div>
            </div>
          @endif
        @endforeach
        @endif
    </div>
</div>
<!-----------------------TESTIMONIALS END------------------------->
<!-------------------------- Certificates & Awards------------------>
<h2 class="landing-photo-gallery text-center">Certificates & Awards
<hr>
</h2>
<section class="container-fluid p-5">
  
<div class="slick marquee">
  @if(isset($certificates))
  @foreach($certificates as $certificate)
    <div class="slick-slide">
      <div class="inner">
      <img src="{{asset('images/uploads/'. $certificate->image)}}" class="img-fluid ml-3" alt="{{$certificate->image}}">
      </div>
    </div>
  @endforeach
  @endif
</div>
</section>
<!-------------------------- Certificates & Awards------------------>
<script>
$(document).ready(function() {
$('.owl-carousel').owlCarousel({
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
</script>
<script>
  AOS.init(
    
  );
</script>

@endsection