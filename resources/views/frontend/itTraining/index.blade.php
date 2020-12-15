@extends('frontend.itTraining.common.layout.app')
@section('title', '')
@section('content')
	<div class="container-fluid main-div">
  <div class="container-fluid">  
    <div id="demo" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
       <li data-target="#demo" data-slide-to="0" class="active"></li>
       <li data-target="#demo" data-slide-to="1"></li>
       <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <!-- The slideshow -->
      <div class="carousel-inner">
        <!-- first slider -->
        <div class="carousel-item active">    
          <div class="slideshow-container ">
            <div class="contents first">
              <div class="myslides" style="display: block;">
                <h2>100% <br> Practical <br>Training<span>Industry Professional Instructors</span></h2>
                <img src="img/training2.png" class="p_img">
  
                <div class="p_detail">
                  <h4>Quality Learning Environment</h4>
                  <p>With 10+ professional instructors &amp; customized computer labs, we prioritise on 
                  providing students with optimized learning space.</p>      
                  <a href="{{route('frontend.course')}}" id="banner-btn">Courses</a>
                  <a href="{{url('online-admission')}}" id="banner-btn">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
  

        <!-- first slider end -->
        <!-- second slider -->

        <div class="carousel-item">
          <div class="slideshow-container ">
            <div class="contents second">
              <div class="myslides" style="display: block;" >
               <h2>Networking <br> hardware <br> programming <span>BASIC TO ADVANCED</span> </h2>
               <img src="img/training3.png" class="p_img">

                <div class="p_detail">
                  <h4>Pathway for IT Professionals</h4>
                  <p>IT Seminars, Bootcamps, Internships &amp; Workplacement oppurtunities helps students
                  gaining valuable workplace experience at HUB IT.</p>
                  <a href="{{route('frontend.course')}}" id="banner-btn">Courses</a>
                  <a href="{{url('online-admission')}}" id="banner-btn">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- second slider end -->

        <!-- third slider -->
        <div class="carousel-item">
          <div class="slideshow-container ">
            <div class="contents third ">
              <div class="myslides" style="display: block;" >
                <h2>Accounting <br> Auditing <br>  &amp; office<span>FOR MANAGEMENT STUDENTS</span></h2>
                <img src="img/training1.png" class="p_img">

                <div class="p_detail">
                  <h4>Best for Business Students</h4>
                  <p>Our Mgmt. curriculum enhances students' report writing &amp; presentation skills 
                  along with real world accounting/banking competency.</p>
                  <a href="{{route('frontend.course')}}" id="banner-btn">Courses</a>
                  <a href="{{url('online-admission')}}" id="banner-btn">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- third slider end -->        
      </div>
    </div>
  </div>
</div>
<!--------------------------SLIDER END------------------------>


<!--------------------------OUR AMENITIES START------------------------>


<!-- Heading Start -->
<div class="containter-fluid " >
  <div class="passion">
    <p id="txt-1">Our Amenities</p>
    <hr>
  </div>
</div>
<!-- Heading END -->


<!-- card-container start -->
<div class="card-container" onclick="location.href='courses';">
  <div class="card" data-aos="fade-right">
    <div class="content-box">
      <h3>Projector Classrooms</h3>

    </div>
  </div>
  <div class="card"  data-aos="fade-right">
    <div class="content-box">
      <h3>Internet Labs</h3>
    </div>
  </div>
  <div class="card"  data-aos="fade-left">
    <div class="content-box">
      <h3>IT Seminars</h3>
    </div>
  </div>
  <div class="card"  data-aos="fade-left">
    <div class="content-box">
      <h3>Field Visits/Works</h3>
    </div>
  </div>
  <div class="card"  data-aos="fade-right">
    <div class="content-box">
      <h3>Experienced Instructors</h3>
    </div>
  </div>
  <div class="card"  data-aos="fade-right">
    <div class="content-box">
      <h3>Internships</h3>
    </div>
  </div>
  <div class="card"  data-aos="fade-left">
    <div class="content-box">
      <h3>Bootcamps</h3>
    </div>
  </div>
  <div class="card"  data-aos="fade-left">
    <div class="content-box">
      <h3>IT Workshops</h3>
    </div>
  </div>
  
</div>
<!-- card-container end -->
 

<!-------------------------OUR AMENITIES END-------------------->




<!-------------------------COUNTER START-------------------->

<section class="counter-section fix ">
  <div class="counter-overlay"></div>
  <div class="container-fluid pb-5 pt-5">
    <div class="row">
          
      <div class="col-md-3 col-sm-6">
        <div class="currency-counter count-items">
        <i class="fas fa-book-open"></i>
          <span class="currency-count">35</span>
          <h2>COURSES</h2>
        </div>
      </div>
         
      <div class="col-md-3 col-sm-6">
        <div class="currency-counter count-items">
          <i class="fa fa-users"></i>
          <span class="currency-count">30</span>
          <h2>TEACHER</h2>
        </div>
      </div>
           
      <div class="col-md-3 col-sm-6">
        <div class="currency-counter count-items">
        <i class="fas fa-user-graduate"></i>
          <span class="currency-count">105</span>
          <h2>STUDENTS</h2>
        </div>
      </div>
            
      <div class="col-md-3 col-sm-6">
        <div class="currency-counter count-items">
          <i class="fa fa-comment-o"></i>
          <span class="currency-count">530</span>
          <h2>Satisfied Customers</h2>
        </div>
      </div>
    </div>		 
  </div>
</section>
<script src="js1/jquery-2.1.4.min.js"></script>
<script src="js1/jquery.counterup.min.js"></script>
<script src="js1/waypoints.min.js"></script>
<script src="js/main.js"></script>

<!-------------------------COUNTER END-------------------->




<!------------------------OUR VALUES START-------------------->

<div class="container-fluid our-values text-center mt-5" >
  
  <div class="row">
  
    <div class="col" >
      <h1>Our values</h1><hr>
    </div>
    <div class="row m-5">
    
      <div class="col-md-3">   
      <div class="counter-overlay">          
        </div> 
        <div class="card">  
                 
          <div class="card_img">
           <img src="https://cdn01.alison-static.net/public/html/site/img/empowerment.png">
         </div>
          <div class="content">
           <h4>Empowerment</h4>
            <p>We are driven by our belief in the power of free education and skills training to change
              people’s lives for the better and are passionate about providing an
              overall learning experience that meets their needs and helps them to achieve life goals.
            </p>
          </div>
        </div>         
      </div>


      <div class="col-md-3 ">
      <div class="counter-overlay">          
        </div> 
        <div class="card">  
                 
          <div class="card_img">
        <img src="https://cdn01.alison-static.net/public/html/site/img/knowledge.png">
        </div>
        <div class="content">
         <h4>Knowledge</h4>
          <p>We are experts in the field of online education and are rigorous in 
            delivering high quality learning materials,services and experiences that deliver the learning 
            outcomes we have promised.
          </p>
        </div>
        </div>
      </div>


      <div class="col-md-3">
      <div class="counter-overlay">          
        </div> 
        <div class="card">  
                 
          <div class="card_img">
        <img src="https://cdn01.alison-static.net/public/html/site/img/inclusivity.png" >
          </div>
        <div class="content">
          <h4>Inclusivity</h4>
          <p>We are inspired by the UN Declaration that “everyone is entitled
            to a free education”. We are committed to equality and access
            to education irrespective of gender, geography, economic status or any other barriers 
            to access.
          </p>
        </div>
        </div>
      </div>


      <div class="col-md-3">
      <div class="counter-overlay">          
        </div> 
        <div class="card">  
                 
          <div class="card_img">
        <img src="https://cdn01.alison-static.net/public/html/site/img/innovation.png" >
          </div>
        <div class="content">
          <h4>Innovation</h4>
          <p>We will not be constrained by what already exists but will lead
            the way in introducing new ways to achieve our mission. Our DNA is
            entrepreneurial and we understand and embrace the pioneering spirit that
            motivates other entrepreneurs.
          </p>
        </div>         
        </div>   
      </div>
    </div>
  </div>
</div>
<!------------------------OUR VALUES END-------------------->



<!------------------------POPULAR COURSE START-------------------->

<div class="container-fluid course mt-5">
  <h1 > Popular COURSE</h1><hr>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-card-4 text-center">
             <img src="img/course1.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name"> 
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>

     

          <div class="col-md-3">
           <div class="profile-card-4 text-center">
             <img src="img/course2.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name">
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                   <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>     

          <div class="col-md-3">
           <div class="profile-card-4 text-center">
             <img src="img/course3.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name">
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                   <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="col-md-3">
           <div class="profile-card-4 text-center">
             <img src="img/course4.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name">
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                   <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>




      <div class="carousel-item">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-card-4 text-center">
             <img src="img/course1.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name"> 
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>

     

          <div class="col-md-3">
           <div class="profile-card-4 text-center">
             <img src="img/course2.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name">
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                   <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>     



          <div class="col-md-3">
           <div class="profile-card-4 text-center">
             <img src="img/course3.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name">
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                   <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="col-md-3">
           <div class="profile-card-4 text-center">
             <img src="img/course4.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name">
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                   <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>





      <div class="carousel-item">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-card-4 text-center">
             <img src="img/course1.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name"> 
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>

     

          <div class="col-md-3">
           <div class="profile-card-4 text-center">
             <img src="img/course2.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name">
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                   <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>     



          <div class="col-md-3">
           <div class="profile-card-4 text-center">
             <img src="img/course3.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name">
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                   <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="col-md-3">
           <div class="profile-card-4 text-center">
             <img src="img/course4.png" class="img img-responsive">
             <div class="profile-content">
                <div class="profile-name">
                  <!-- <p>@johndoedesigner</p> -->
                </div>
                <div class="profile-description">
                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>STUDENTS</p>
                      <h4>130</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>CLASSES / DAY</p>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>GRADUATES</p>
                      <h4>168</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col">
                  <div class="profile-overview p-0">
                   <button><a href="{{url('online-admission')}}">Enroll now</a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="profile-overview p-0">
                    <button><a href="detail">View Details</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>

    </div>
  </div>
</div>


<!------------------------POPULAR COURSE END-------------------->





<!------------------------TESTIMONIALS START-------------------->


<section class="testimonial text-center m-5">
  <div class="container">
    
    <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button
     thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="6000" data-duration="2000">             
     <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="testimonial4_slide">
            <img src="../../img/satkar.jpg" class="img-circle img-responsive" />
            <p>Its been a wonderful journey with HUBIT. Learning Web Designing with Instructor sir was the 
              best experience. He has an excellent problem solving technique
               and he taught in a simple manner. His friendly behavior makes me comfortable to ask my queries.
                 </p>
            <h4>Satkar Lamsal</h4>
            <h6>Web Designing</h6>
          </div>
        </div>

        <div class="carousel-item">
          <div class="testimonial4_slide">
            <img src="../../img/manishpandey.png" class="img-circle img-responsive" />
            <p>As a HUB IT Student, Studying UI/UX, Graphics Designing. Passing 1 years of this experience
               with HUB IT got more creative and learning experience in a Advance Digital way of learning. 
               Now working as Freelancer, Graphics Designer, Digital Marketer for multiple business at Butwal. 
               Thanks to HUB IT for your unique pattern of teaching and helping to figure out problems while studying
               . One of the best
               IT training institute in Butwal, Nepal. Because of their Advance way of teaching and 
               learning by professional teachers. </p>
            <h4>Manish Pandey</h4>
            <h6>Graphics Designing</h6>

          </div>
        </div>

        <div class="carousel-item">
          <div class="testimonial4_slide">
            <img src="../../img/binitshrestha.png" class="img-circle img-responsive" />
            <p>One of the best institute in butwal. This place is one of amazing platform to learn, experience the course in long holidays. Friendly teachers and good friends are  essence in this institute.
I loved this Institute through heartly.
I am a web designer. I had learnt lot of experience which i never had studied in my high school.
Thank you so much Hub IT.
Notice: This rating is given through heartly no any abusement all.
Like </p>
            <h4>Binit Shrestha</h4>
            <h6>Web designing</h6>

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial4" data-slide="next">
      <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</section>

<!------------------------TESTIMONIALS END-------------------->





<!------------------------OUR PATNER START -------------------->
<section class="container-fluid p-5">  
  <h1 class="text-center " style="margin-top:150px;">our-patners<hr></h1>
  <div class="slick marquee">
    <div class="slick-slide">
      <div class="inner">
        <img src="img/award5.jpg" class="img-fluid ml-3" alt="12">
      </div>
    </div>
    <div class="slick-slide">
      <div class="inner">
        <img src="img/award.png" class="img-fluid ml-3" alt="12">
      </div>
    </div>
    <div class="slick-slide">
      <div class="inner">
        <img src="img/award2.jpg" class="img-fluid ml-3" alt="12">
      </div>
    </div>
    <div class="slick-slide">
      <div class="inner">
        <img src="img/award3.png" class="img-fluid ml-3" alt="12">
      </div>
    </div>
    <div class="slick-slide">
      <div class="inner">
        <img src="img/award4.png" class="img-fluid ml-3" alt="12">
      </div>
    </div>
  </div>
</section>

<!------------------------OUR PATNER END -------------------->





<!------------------------READY TO GET STARTED START -------------------->

<div class="container-fluid connect">
  <h2>READY TO GET STARTED?</h2>
  <p>Access Startup Institute's network of vetted coding, design, marketing, and sales talent.</p>
  <button type="submit" class="btn btn-primary mb-2  ">Hire now</button> 
</div>
@endsection