<!DOCTYPE html>
<html>
<head>
	@include('includes/traininghead')
<link rel="stylesheet" type="text/css" href="css/training/library.css">
 

<body>
<!-----------------------NAVBAR------------------------------->
@include("includes/navtraining")
 
<!-------------------------NAVBAR END--------------------------------->
<div class="nav-left visible-xs">
  <div class="button" id="btn">
    <div class="bar top"></div>
    <div class="bar middle"></div>
    <div class="bar bottom"></div>
  </div>
</div>
<!-- nav-right -->
<main>


  <nav>
    <div class="nav-left hidden-xs">
      <div class="button" id="btn">
        <div class="bar top"></div>
        <div class="bar middle"></div>
        <div class="bar bottom"></div>
      </div>
    </div>
    <!-- nav-right -->
  </nav>

  <a href="https://codepen.io/tonkec/" class="ua" target="_blank">
    <i class="fa fa-user"></i>
  </a>
</main>

<div class="sidebar">
  <ul class="sidebar-list">
    <li class="sidebar-item"><a href="#" class="sidebar-anchor">Item 1</a></li>
    <li class="sidebar-item"><a href="#" class="sidebar-anchor">Item 2</a></li>
    <li class="sidebar-item"><a href="#" class="sidebar-anchor">Item 3</a></li>
    <li class="sidebar-item"><a href="#" class="sidebar-anchor">Item 4</a></li>
  </ul>
</div>







<!-- login form start -->
<!-----------------------NOTICE RIBBON---------------------->
<section class="container-fluid mt-5" style="background-color: red; color: white;">
  <div class="row">
    <div class="col-xl-12">
      <marquee behavior="alternate">Please, Login to access the content of library, Thank you. </marquee>
    </div>
  </div>
</section>
<!-----------------------NOTICE RIBBON END------------------>


<!---------------------LOGIN FORM START--------------------->
<section class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/logo.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="login" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
						@csrf
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="login" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
</section>

<!---------------------LOGIN FORM END----------------------->

<!-- login form end -->

<!----------------------FOOTER------------------------------->
 <!-- <footer> -->

 @include('includes.footer')

<!-- </footer>  -->
<script>
$(document).ready(function() {

function toggleSidebar() {
  $(".button").toggleClass("active");
  $("main").toggleClass("move-to-right");
  $(".sidebar-item").toggleClass("active");
}

$(".button").on("click tap", function() {
  toggleSidebar();
});

$(document).keyup(function(e) {
  if (e.keyCode === 27) {
    toggleSidebar();
  }
});

});

</script>

</body>
</html>