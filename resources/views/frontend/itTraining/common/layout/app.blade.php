<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<head>

  @include('frontend.itTraining.common.include.header')
  
<link rel="stylesheet" type="text/css" href="{{asset('css/training/home-training.css')}}" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@300&family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@stack('style')

</head>  
<body>  
<!-----------------------NAVBAR------------------------------->
@include('frontend.itTraining.common.include.nav')
<!-------------------------NAVBAR END--------------------------------->

<!-----------------------------SLIDER----------------------->
@yield('content')
<!------------------------READY TO GET STARTED END -------------------->


<!-- footer -->
@include('frontend.common.include.footer')
<!-- footer -->


<script>

// OUR PATNER JAVASCRIPT START//

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

// OUR PATNER JAVASCRIPT END//



</script>


<script>
// All ANIMATION DURATION AND OFFSET EXCEPT TOP CAROUSEL//
  AOS.init({
     offset:1,
    duration:10,
  });
</script>

@stack('script')

</body>
</html>