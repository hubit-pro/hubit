<!DOCTYPE html>
<html>
<head>
	@include('includes/solutionhead')
	<link rel="stylesheet" type="text/css" href="css/solution/home-solution.css">

  </head>
  <body style="zoom:80%">
<!-----------------------NAVBAR------------------------------->
	@include('frontend.itSolution.common.include.nav')
<!-------------------------NAVBAR END--------------------------------->
@yield('content')
<!------------------------------------CLIENTS END--------------->
 <!-- <footer> -->
@include('frontend.common.include.footer')
<!-- </footer>  -->

<script>
	$('.carousel').carousel({
    cycle: true,
    pause: "true",
     autoplayHoverPause:true,
	
})
</script>
<script src="{{asset('js/miss.js')}}"></script>

</body>
</html>