@extends('frontend.common.layout.app')
@section('title', '')
@push('style')
  <link rel="stylesheet" type="text/css" href="{{asset('css/home/home.css')}}" media>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
@endpush
@section('content')

<!-----------------------------SLIDER----------------------->
<section class="container-fluid p-0 " style="position: relative; padding-left:1% !important; padding-right:1% !important;">
    <div id="MagicCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">

        <div class="carousel-inner" role="listbox">
          
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/set1.jpg" alt="first image">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/set2.jpg" alt="first image">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/set3.jpg" alt="first image">
          </div>

        </div>
    </div>
    <!--------------------------SLIDER END------------------------>

    <!-------------------------TEXT CONTAINER-------------------->
    <section class="container-fluid"id="topper">
      <!--this id "topper" is the transparent box over the slider--->
      <div class="row content1">
        <div class="col-xl-3">
          <h1>HUB IT<br>GROUP PVT LTD.</h1>
          <h6>Enabling the Innovative Age</h6>
        </div>
        <div class="col-xl-9 text-justify">
          <p><strong>HUB IT GROUP PVT LTD.</strong> is the best IT Company to provide best IT Training and IT Solution in town since 2017 . We put ourselves in the shoes of your target audience and try to adopt their preferences, perceptions and behaviour . By providing best IT Suport we give POWER to your business and by providing best IT Training we give WINGS to your dreams .</p>
        </div>       
      </div>
      <div class="go-to-page">
        <h2>Visit our services</h2>
      </div>
      <div class="row links">
        <div class="col-xl-12 text-center">
          <a class="button" href="{{route('frontend.it-solution')}}"><button type="button" class="btn lin" class="button">IT SOLUTION</button></a>
          <a class="button" href="{{route('frontend.it-training')}}"><button type="button" class="btn lin" class="button">IT TRAINING</button></a>
        </div>
        <!-------------marquee repeat start-------------------------------------- -->
        <div class="marquee">
          <div class="track">
            <div class="content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notice: Web Design and Developement classes will start from Thursday, 21st December. 
              All other classes will start from Sunday, 24th December. 
              For any enquiry please call at 071-549281 or 9857245414. Have a great day ahead. Thank you.
            </div>
              <div class = "content2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notice: Web Design and Developement classes will start from Thursday, 21st December. 
              All other classes will start from Sunday, 24th December. 
              For any enquiry please call at 071-549281 or 9857245414. Have a great day ahead.
               Thank you.
            </div> 
          </div>
        </div>
    <!--------------------marquee repeat end--------------------------------------------- -->
  </section>

</section>
<!-------------------------TEXT CONTAINER END---------------->
<!------------------------SMALL SLIDER START---------------->
<div class="heading mt-5">
  <p >MEMORABLE MOMENTS @ HUB</p>
  <hr>
    <div class="container">
      <p class="quotes-moments"><i class="fas fa-quote-left"></i>We always welcome anyone who are willing to learn new things and 
      in the process we share some timeless moments, some of those are captured in photos. 
      <i class="fas fa-quote-right"></i>

      </p>
    </div>
  </div>
<div class="container-fluid see-all">
  <p><a href="ourworks">See All >></a></p>
</div>


<section class="container-fluid pb-4">
  <div class="owl-carousel owl-theme" id="box">



      <div class="item">
       <img src="img/we.jpg" class="img-fluid" alt="12">
      </div>
      <div class="item">
        <img src="img/u.jpg" class="img-fluid" alt="12">
      </div>
      <div class="item">
        <img src="img/t.jpg" class="img-fluid" alt="12">
      </div>
      <div class="item">
        <img src="img/q.jpg" class="img-fluid" alt="12">
      </div>
      <div class="item">
        <img src="img/i.jpg" class="img-fluid" alt="12">
      </div>    

  </div>
</section>

<!------------------------SMALL SLIDER END------------------>

<!-- Board saying start -->
<div class="heading">
      <p>Message from the board.</p>
      <hr>
  </div>



  <div id="carouselExampleIndicators" class="carousel slide mb-5 ml-3 mr-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators"  data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   
  </ol>
  <div class="carousel-inners ">
    <div class="carousel-item active">
    <div class="inactive">
    <div class="board-img">
        <img src="img/s.jpg">
    </div>
    <h2 >Er. Hari Banjade</h2>
     <p>We are always trying to better the expereince the student get from our institution by providing them better consultation and facilities. HUB IT primarily focuses on sharpening students skills with internship and job oppurtunities.</p>                                
    </div>
    </div>
    <div class="carousel-item">
    <div class="inactive">
      <div class="board-img">
    <img src="img/my_pic.jpg">

      </div>
    <h2 >Er. Niraj</h2>
       <p>We are always trying to better the expereince the student get from our institution by providing them better consultation and facilities. HUB IT primarily focuses on sharpening students skills with internship and job oppurtunities.</p>                                  
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Board saying end -->
<!--------------------------CLIENTSTOPIC START------------------------>
<section class="container-fluid  text-center">
  <div class="heading">
    
      <p>OUR RECENT CLIENTS</p>
      <hr>
      <div class="container">
<p class="quotes-moments"><i class="fas fa-quote-left"></i>Above and beyond, not only are we an innovation company, we are in service of our clients. 
<i class="fas fa-quote-right"></i>
</p>

</div>
</div>
    </div>
  </div>
</section>
<!------------------------CLIENTS TOPIC END---------------------------->
<div class="container-fluid see-all">
  <p><a href="ourclients">See All >></a></p>
</div>

<!-----------------------CLIENTS START-------------------------------->

<div class="owl-carousel ">
    <div class="item1">
       <img src="img/5c417287d95a9.jpg" class="img-fluid" alt="12">
</div>
    <div class="item1">
       <img src="img/download (1).png" class="img-fluid" alt="12">
       </div>
    <div class="item1">
       <img src="img/download.png" class="img-fluid" alt="12">
</div>
    <div class="item1">
       <img src="img/the-classic-view-everest.jpg" class="img-fluid" alt="12">
</div>

</div>  
</section>

<!------------------------------------CLIENTS END--------------->
<!-- <maps -->
@include('frontend.common.include.googleMap')

@endsection