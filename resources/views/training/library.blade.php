<!DOCTYPE html>
<html style="padding:0px !important">
<head>
	@include('includes/traininghead')
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/training/library.css">
 

<body>
<!-----------------------NAVBAR------------------------------->
<<<<<<< HEAD
@include("includes/navtraining")
=======
{{-- @include("includes/navtraining") --}}
@include('frontend.itTraining.common.include.nav')
<link rel="stylesheet" type="text/css" href="css/training/library.css">
>>>>>>> 5554cf4c4c86480dddae5cee48a141c39af88d53
 
<!-------------------------NAVBAR END--------------------------------->
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
        <div class="logo">
        </div>
        <span>SAtkar</span>

				<div class="p-4 pt-5">
        <ul class="list-unstyled  course mb-5">
	          <li class="active">
	            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">COURSE</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu1">
                <li class="active">
	            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">webdesign</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu2">
                <li class="active">
	            <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">html</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu3">
                <li>
                    <a href="h1">head</a>
                </li>
               
               </ul>
               <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">css</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu4">
                <li>
                    <a href="h1">background</a>
                </li>
               
               </ul>
               <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Javascript</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu5">
                <li>
                    <a href="h1">if else</a>
                </li>
               
               </ul>
</ul>
	      
            </ul>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5" style="padding-top:10px !important;">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ref E-Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Assignment</a>
                </li>
                </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">HUBIT TRAINING AND LIBRARY</h2>
        <p>sectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     <div class="text-center">
       <button class="books-btn">OUR FREE BOOKS</button>
       </div>
     
      </div>
		</div>

    <script src="css/js/jquery.min.js"></script>
    <script src="css/js/popper.js"></script>
    <script src="css/js/bootstrap.min.js"></script>
    
    <script>
      (function($) {

"use strict";

var fullHeight = function() {

  $('.js-fullheight').css('height', $(window).height());
  $(window).resize(function(){
    $('.js-fullheight').css('height', $(window).height());
  });

};
fullHeight();

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

})(jQuery);

    </script>
<!----------------------FOOTER------------------------------->
 <!-- <footer> -->

 @include('includes.footer')

<!-- </footer>  -->

</body>
</html>