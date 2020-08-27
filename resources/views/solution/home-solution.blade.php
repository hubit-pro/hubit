<!DOCTYPE html>
<html>
<head>
	@include('includes/solutionhead')
  <!-- Please dont edit this code-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131576038-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131576038-1');
  </script>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WT6FX7W');</script>
<!-- End Google Tag Manager -->
<!-- to this -->

</head>
<body>

<!-- Dont edit this code-->
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT6FX7W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- to this -->

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v3.2'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=install_email
  page_id="1872050236414372"
  theme_color="#082941">
</div>



<!-----------------------NAVBAR------------------------------->
	@include("includes/navsolution")
<!-------------------------NAVBAR END--------------------------------->


<!-----------------------------SLIDER----------------------->
<section class="container-fluid p-0" style="position: relative;">
<div id="MagicCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
	<div class="carousel-inner" role="listbox">
	<!-- <ol class="carousel-indicators">
		<li data-target="#MagicCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#MagicCarousel" data-slide-to="1"></li>
		<li data-target="#MagicCarousel" data-slide-to="2"></li>
	</ol>
	 -->
	
		
				
					<div class="carousel-item active">
</div>
				
			

	</div>
</div>
<!--------------------------SLIDER END------------------------>


<!-------------------------TEXT CONTAINER-------------------->
<section class="container-fluid" id="topper"><!--this id "topper" is the transparent box over the slider--->

	

	<div class="row pt-5 pl-5 pr-5 content1">
		<div class="col-xl-3">
			<h1>IT<br>SOLUTION</h1>
		</div>
		<div class="col-xl-3 list">
			*Single 1MP Bullet Camera<br>
			*Single 2.0MP AH Bullet Camera<br>
			*2.0MP AHD Bullet Camera<br>
			*1080 AHD Bullet Cam
		</div>
		<div class="col-xl-3 list">			
			*8 Channel 4.0MP AHD DVR<br>
			*4 Channel AHD/TVI/CVI/ANALOG<br>
			*Attendence System<br>
			*ZK Teco
		</div>
		<div class="col-xl-3 list">			
			*Face Attendence<br>
			*Intercom<br>
			*PABX Call Recorder<br>
			*Fire Extinguisher...more
		</div>
	</div>

</section>

</section>
<!-------------------------TEXT CONTAINER END---------------->


<!--------------------------PRODUCTS IN-DEMAND TOPIC------------------------------>
<section class="container-fluid p-5 text-center" style="background-color: white;">
	<div class="row">
		<div class="col-xl-12" style="color: darkslategray; border-bottom: 1px solid #082941;">
			<h4>PRODUCTS HIGHLY IN-DEMAND</h4>
		</div>
	</div>
</section>
<!------------------------PRODUCTS IN-DEMAND TOIPIC END---------------------------->

<!------------------------PRODUCTS START------------------->
<section class="container-fluid pb-5 pr-5" style="background-color: white;">
	<div class="row">
		<div class="col-xl-3 text-center">
			<div class="row">
				<div class="col-xl-12">
					<img src="img/cctv.png" style="height: 110px; width: 110px; border-radius: 100px; border: 2px solid silver">
				</div>
				<div class="col-xl-12 pt-3">
					<a style="color: black;" href="products"><h6>CCTV Camera</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-3 text-center">
			<div class="row">
				<div class="col-xl-12">
					<img src="img/images13.png"style="height: 110px; width: 110px; border-radius: 100px; border: 2px solid silver">
				</div>
				<div class="col-xl-12 pt-3">
					<a style="color: black;" href="products"><h6>Fire Extinguisher</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-3 text-center">
			<div class="row">
				<div class="col-xl-12">
					<img src="img/images8.png" style="height: 110px; width: 110px; border-radius: 100px; border: 2px solid silver">
				</div>
				<div class="col-xl-12 pt-3">
					<a style="color: black;" href="products"><h6>Computer Parts</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-3 text-center">
			<div class="row">
				<div class="col-xl-12">
					<img src="img/image12.png" style="height: 110px; width: 110px; border-radius: 100px; border: 2px solid silver">
				</div>
				<div class="col-xl-12 pt-3">
					<a style="color: black;" href="products"><h6>Biometrics</h6></a>
				</div>
			</div>
		</div>

	</div>
</section>
<!------------------------PRODUCTS END--------------------->



<!--------------------------PROJECT TOPIC START------------------------>
<section class="container-fluid p-5 text-center" style="background-color: white;">
	<div class="row">
		<div class="col-xl-12" style="color: darkslategray; border-bottom: 1px solid #082941;">
			<h4>OUR WEB PROJECTS</h4>
		</div>
	</div>
</section>
<!------------------------PROJECT TOPIC END---------------------------->


<!-----------------------PROJECTS START---------------------->
<section class="container-fluid pl-5 pr-5 pb-5" style="background-color: white;">
	<div class="row pl-5 cardo">

		<div class="col-xl-2 ml-4 mt-1">
			<div class="row card">
				<div class="col-xl-12 pt-1 pb-1">
					<img style="height: 120px; width: 120px;" src="img/lca logo.png">
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lightgray;">
					<h6>Lumbini City Aspatal</h6>
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lavender;">
					<h6>Project Completed</h6>
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lightgray;">
					<a href="http://lca.hubit.com.np/"><h6>Link of the website</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-2 ml-4 mt-1">
			<div class="row card">
				<div class="col-xl-12 pt-1 pb-1">
					<img style="height: 120px; width: 120px;" src="img/peace.jpg">
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lightgray;">
					<h6>Hotel Peace Zone</h6>
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lavender;">
					<h6>Project Completed</h6>
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lightgray;">
					<a href="http://hotelpeacezone.com/"><h6>Link of the website</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-2 ml-4 mt-1">
			<div class="row card">
				<div class="col-xl-12 pt-1 pb-1">
					<img style="height: 120px; width: 120px;" src="img/inn.jpg">
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lightgray;">
					<h6>Hotel Lumbini Comfort</h6>
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lavender;">
					<h6>Project Completed</h6>
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lightgray;">
					<a href="http://lumbinicomfortinn.com/"><h6>Link of the website</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-2 ml-4 mt-1">
			<div class="row card">
				<div class="col-xl-12 pt-1 pb-1">
					<img style="height: 120px; width: 120px;" src="img/mukesh.jpg">
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lightgray;">
					<h6>Dr. Mukesh Sharma</h6>
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lavender;">
					<h6>Project Completed</h6>
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lightgray;">
					<a href="http://drmukesh.com/"><h6>Link of the website</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-2 ml-4 mt-1">
			<div class="row card">
				<div class="col-xl-12 pt-1 pb-1">
					<img style="height: 120px; width: 120px;" src="img/rotary.png">
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lightgray;">
					<h6>Rotatary Club Of Palpa</h6>
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lavender;">
					<h6>Project running</h6>
				</div>
				<div class="col-xl-12 pt-1 pb-1" style="background-color: lightgray;">
					<a href="#"><h6>Link of the website</h6></a>
				</div>
			</div>
		</div>

	</div>
</section>
<!-----------------------PROJECTS END------------------------>


<!--------------------------WORK TOPIC START------------------------>
<section class="container-fluid p-5 text-center" style="background-color: white;">
	<div class="row">
		<div class="col-xl-12" style="color: darkslategray; border-bottom: 1px solid #082941;">
			<h4>OUR RECENTS WORKS</h4>
		</div>
	</div>
</section>
<!------------------------WORK TOPIC END---------------------------->

<!------------------------WORK START-------------------------------->
<section class="container-fluid p-5" style="background-color: white;">
	<div class="row">

		<div class="col-xl-3 text-center">
			<div class="row">
				<div class="col-xl-12 work">
					<img src="img/work.jpg">
					<div class="hov">
						<strong>Connecting CCTV at Lumbini City Hospital</strong>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 text-center">
			<div class="row">
				<div class="col-xl-12 work">
					<img src="img/work.jpg">
					<div class="hov">
						<strong>Connecting CCTV at Lumbini City Hospital</strong>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 text-center">
			<div class="row">
				<div class="col-xl-12 work">
					<img src="img/work.jpg">
					<div class="hov">
						<strong>Connecting CCTV at Lumbini City Hospital</strong>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 text-center">
			<div class="row">
				<div class="col-xl-12 work">
					<img src="img/work.jpg">
					<div class="hov">
						<strong>Connecting CCTV at Lumbini City Hospital</strong>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<!------------------------WORK END---------------------------------->



<!--------------------------CLIENTSTOPIC START------------------------>
<section class="container-fluid p-5 text-center" style="background-color: white;">
	<div class="row">
		<div class="col-xl-12" style="color: darkslategray; border-bottom: 1px solid #082941;">
			<h4>OUR RECENT CLIENTS</h4>
		</div>
	</div>
</section>
<!------------------------CLIENTS TOPIC END---------------------------->


<!-----------------------CLIENTS START-------------------------------->
<section class="container-fluid p-5" style="background-color: white;">
	<div class="row">
		<div class="col-xl-2 text-center">
			<div class="row">
				<div class="col-xl-12">
					<img src="img/hilltown.png" style="height: 120px; width: 120px; border-radius: 100px; border: 3px solid silver;">
				</div>
				<div class="col-xl-12 pt-3">
					<a style="color: black;" href="gallery"><h6>Hotel Hilltown</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-2 text-center">
			<div class="row">
				<div class="col-xl-12">
					<img src="img/lca logo.png" style="height: 120px; width: 120px; border-radius: 100px; border: 3px solid silver;">
				</div>
				<div class="col-xl-12 pt-3">
					<a style="color: black;" href="gallery"><h6>Lumbini City Aspatal</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-2 text-center">
			<div class="row">
				<div class="col-xl-12">
					<img src="img/mukesh.jpg" style="height: 120px; width: 120px; border-radius: 100px; border: 3px solid silver;">
				</div>
				<div class="col-xl-12 pt-3">
					<a style="color: black;" href="gallery"><h6>Dr. Mukesh Sharma</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-2 text-center">
			<div class="row">
				<div class="col-xl-12">
					<img src="img/rotary.png" style="height: 120px; width: 120px; border-radius: 100px; border: 3px solid silver;">
				</div>
				<div class="col-xl-12 pt-3">
					<a style="color: black;" href="gallery"><h6>Rotatary Club of Palpa</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-2 text-center">
			<div class="row">
				<div class="col-xl-12">
					<img src="img/inn.jpg" style="height: 120px; width: 120px; border-radius: 100px; border: 3px solid silver;">
				</div>
				<div class="col-xl-12 pt-3">
					<a style="color: black;" href="gallery"><h6>Hotel Lumbini Comfort Inn</h6></a>
				</div>
			</div>
		</div>

		<div class="col-xl-2 text-center">
			<div class="row">
				<div class="col-xl-12">
					<img src="img/peace.jpg" style="height: 120px; width: 120px; border-radius: 100px; border: 3px solid silver;">
				</div>
				<div class="col-xl-12 pt-3">
					<a style="color: black;" href="gallery"><h6>Hotel Peacezone</h6></a>
				</div>
			</div>
		</div>



	</div>
</section>
<!------------------------------------CLIENTS END--------------->



 <!-- <footer> -->

 @include('includes.footer')

<!-- </footer>  -->

<script>
	$('.carousel').carousel({
    cycle: true,
    pause: "null"
})
</script>




<script src="js/miss.js"></script>

</body>
</html>