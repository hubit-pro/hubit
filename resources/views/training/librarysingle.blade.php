<!DOCTYPE html>
<html style="padding:0px !important">
<head>
	@include('includes/traininghead')
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/training/library.css">
 

<body>
<!-----------------------NAVBAR------------------------------->
@include("includes/navtraining")
 
<!-------------------------NAVBAR END--------------------------------->
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
        <div class="logo">
        </div>
        <span>SAtkar</span>

				<div class="p-4 pt-5">
        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">COURSE</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu1">
                <li>
                    <a href="#">WEB DESIGN</a>
                </li>
                <li>
                    <a href="#">GRAPHICS DESIGN</a>
                </li>
                
	            </ul>
	          </li>
	          <ul>
</ul>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">HTML</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">H1</a>
                </li>
                <li>
                    <a href="#">GRID</a>
                </li>
                <li>
                    <a href="#">DIV</a>
                </li>
	            </ul>
	          </li>
	          
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">CSS</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
              </ul>
	          </li>
	          
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

        <h2 class="mb-4">h1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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