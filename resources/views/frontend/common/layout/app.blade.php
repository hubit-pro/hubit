<!DOCTYPE html>
<html>
<head>
  @include('frontend.common.include.style')
  <title>Best IT Training In Butwal Nepal</title>
  @stack('style')
  
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
@stack('script')
</body>
</html>