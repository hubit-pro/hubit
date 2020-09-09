<!DOCTYPE html>
<html>
<head>
	@include("includes/traininghead")
  <link rel="stylesheet" type="text/css" href=" css/training/home-training.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head> 
<body  style="zoom:80%"> 

<!-----------------------NAVBAR------------------------------->
@include('includes/navtraining')
<!-------------------------NAVBAR END--------------------------------->


<!-----------------------------SLIDER----------------------->
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner " style="height:600px;">
    

      <div class="item active" >
      <div class="bg-img"  style="background-image: url('../../img/it.jpg'); ">
  <form action="/action_page.php" class="containers">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
      </div>

      <div class="item">
      <div class="bg-img"  style="background-image: url('../../img/it1.jpg'); ">
  <form action="/action_page.php" class="containers">
    <h1>Login</h1> 

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
      </div>
    
      <div class="item">
      <div class="bg-img" style="background-image: url('../../img/it2.jpg'); ">
  <form action="/action_page.php" class="containers">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
      </div>
    </div>

    <!-- Left and right controls -->
  
  </div>
</div>

<!--------------------------SLIDER END------------------------>
<div class="containter-fluid">
  <div class="passion">
       <p id="txt-1">
          Our Amenities
      </p>
      <hr style="width: 50%; height: 2px; background-color: #cb0fa2;border-radius: 13px;">
  </div>
</div>



<div class="card-container" onclick="location.href='courses';">
  <div class="card">
    <div class="content-box">
      <h3>Projector Classrooms</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>Internet Labs</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>IT Seminars</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>Field Visits/Works</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>Experienced Instructors</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>Internships</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>Bootcamps</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-box">
      <h3>IT Workshops</h3>
    </div>
  </div>
</div>


 

<!-------------------------TEXT CONTAINER-------------------->


<div class="container-fluid why-us">
<div class="row">
<div class="col-md-4 m-0 p-0 ">
<div style="height:200px;width:300px;" class="row">
<img src="img/logo4.png"style="height:100%;width:100%;" >
</div>

</div>
<div class="col-md-8">
<p><strong style="color: #ff2300">HUB IT GROUP PVT LTD.</strong> is a Hampshire based 
creative agency offering services such as surveillance system,intercom system Website Design,
 IT Support, IT Training and many more services . Founded in 2017 we have developed ourselves into the 
 local area providing services to customers in the area. We are a relatively new agency however that doesn’t 
 stop us providing professional services. We are learning new technologies, skills and methods all of the
  time and always updating our clients work to ensure the highest and latest standards possible.
  We put ourselves in the shoes of your target audience and try to adopt their preferences, perceptions and 
  behaviour.</p><br>

  
</div>
</div>

</div>

@section('our-values')
@parent
@endsection




<!-- footer -->
@include('includes/footer')
<!-- footer -->



</body>
</html>