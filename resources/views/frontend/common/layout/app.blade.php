<!DOCTYPE html>
<html>
<head>
  @include('frontend.common.include.style')
  <title>Best IT Training In Butwal Nepal</title>
  
</head>
	
<body>

<!-----------------------NAVBAR------------------------------->
@include("frontend.common.include.header")
<!-------------------------NAVBAR END--------------------------------->
  @yield('content')
<!-- <maps -->
    <!-- <footer> -->
    @include('frontend.common.include.footer')
<!-- </footer>  -->
@include('frontend.common.include.script')
</body>
</html>