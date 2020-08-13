<!DOCTYPE html>
<html>
<head>
	@include('includes/traininghead')
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


<!-----------------------NAVBAR------------------------------->
@include("includes/navtraining")
 
<!-------------------------NAVBAR END--------------------------------->



<!--------------------------NON-SLIDER----------------------->
<section class="container-fluid p-0 non" style="position: relative;">

  <img src="img/train.jpg">


<!-------------------------TEXT CONTAINER-------------------->
  <section class="container-fluid" id="topper"><!--this id "topper" is the transparent box over the slider--->

    <div class="row pt-5 pb-4 rib">
   
    <div class="row">
      <div class="col-xl-12 text-center" style="color: white;">
        <h3>Training-->Library</h3>
      </div>
    </div>

  </section>

</section>
<!-------------------------TEXT CONTAINER END---------------->

<!-----------------------NOTICE RIBBON---------------------->
<section class="container-fluid" style="background-color: red; color: white;">
  <div class="row">
    <div class="col-xl-12">
      <marquee behavior="alternate">Beware !! Only HUB IT students can enter this zone .</marquee>
    </div>
  </div>
</section>
<!-----------------------NOTICE RIBBON END------------------>


<!---------------------LOGIN FORM START--------------------->
<section class="container-fluid p-5">
  <div class="container text-center">
    <form>
      <div class="row">
        <div class="col-xl-12">
          <h4>LOGIN FORM</h4><p>Please login to enter the library .</p>
        </div>
        <div class="col-xl-12 text-center p-2">
          <input type="text" name="" required="" placeholder="Enter you ID No.">
        </div>
        <div class="col-xl-12 text-center p-2">
          <input type="password" name="" required="" placeholder="Enter your password">
        </div>
        <div class="col-xl-12 text-center p-2 but">
          <button>SUBMIT</button>
        </div>
      </div>        
    </form>
  </div>
</section>
<!---------------------LOGIN FORM END----------------------->


<!----------------------FOOTER------------------------------->
 <!-- <footer> -->

 @include('includes.footer')

<!-- </footer>  -->

<script src="js/miss.js"></script>

</body>
</html>