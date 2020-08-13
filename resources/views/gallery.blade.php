<!DOCTYPE html>
<html>
<head>
@include('includes/homehead')
<title>Gallery</title>

	
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
@include("includes/navhome")
 
<!-------------------------NAVBAR END--------------------------------->



<!--------------------------NON-SLIDER----------------------->
<section class="container-fluid p-0 non" style="position: relative;">

  <img src="img/train.jpg">


<!-------------------------TEXT CONTAINER-------------------->
  <section class="container-fluid" id="topper"><!--this id "topper" is the transparent box over the slider--->

    <div class="row pt-5 pb-4 rib">
    
    <div class="row">
      <div class="col-xl-12 text-center" style="color: white;">
        <h3>Solution-->Gallery</h3>
      </div>
    </div>

  </section>

</section>
<!-------------------------TEXT CONTAINER END---------------->


<!-- -----------------GALLERY START-------------->
<section class="container-fluid p-5">
  <div class="row">

<!------------tabs start---------->
    <div class="col-xl-2 tabs">
      <div class="row click">
        <div class="col-xl-12 p-2">
          <div class="tab" id="tab1" onclick="tab1()"><h6>Our Members</h6></div>
        </div>
        <div class="col-xl-12 p-2">
          <div class="tab" id="tab2" onclick="tab2()"><h6>Our Works</h6></div>
        </div>
        <div class="col-xl-12 p-2">
          <div class="tab" id="tab3" onclick="tab3()"><h6>Our Partners</h6></div>
        </div>
        <div class="col-xl-12 p-2">
          <div class="tab" id="tab4" onclick="tab4()"><h6>Our Clients</h6></div>
        </div>
        <div class="col-xl-12 p-2">
          <div class="tab" id="tab5" onclick="tab5()"><h6>Our Projects</h6></div>
        </div>
      </div>
    </div>
<!------------tabs end---------->

<!------------members start---------->
    <div class="col-xl-10 panel" id="panel1">
      <div class="row">
        <div class="col-xl-3 p-1 gallen">
          <img src="img/s.jpg">
          <div class="ingallen">
            <p>Hari Banjade<br>CEO of HUB IT GROUP PVT LTD<br>Bachelor in C.E</p>
          </div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/per.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/per.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/per.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/per.jpg">
          <div class="ingallen"></div>
        </div>
      </div>
    </div>
<!------------members end---------->

<!------------works start---------->
    <div class="col-xl-10 panel" id="panel2">
      <div class="row">
        <div class="col-xl-3 p-1 gallen">
          <img src="img/pac.jpg">
          <div class="ingallen">cot cot cot cot</div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/pac.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/pac.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/pac.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/pac.jpg">
          <div class="ingallen"></div>
        </div>
      </div>
    </div>
<!------------works end---------->

<!------------partners programmes---------->
    <div class="col-xl-10 panel" id="panel3">
      <div class="row">
        <div class="col-xl-3 p-1 gallen">
          <img src="img/broad.png">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/classic.png">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/lumbini.png">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/per3.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/per3.jpg">
          <div class="ingallen"></div>
        </div>
      </div>
    </div>
<!------------partners programmes end---------->

<!------------projects start---------->
    <div class="col-xl-10 panel" id="panel4">
      <div class="row">
        <div class="col-xl-3 p-1 gallen">
          <img src="img/hilltown.png">
          <div class="ingallen">eot eot eot eot</div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/inn.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/peace.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/rotary.png">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/mukesh.jpg">
          <div class="ingallen"></div>
        </div>
      </div>
    </div>
<!------------projects end---------->

<!------------premises start---------->
    <div class="col-xl-10 panel" id="panel5">
      <div class="row">
        <div class="col-xl-3 p-1 gallen">
          <img src="img/office.jpg">
          <div class="ingallen">rat rat rat rat</div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/office.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/office.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/office.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/office.jpg">
          <div class="ingallen"></div>
        </div>
      </div>
    </div>
<!------------premesis end---------->

  </div>
</section>
<!-- -----------------GALLERY END-------------->








 <!-- <footer> -->
   

 @include('includes.footer')

<!-- </footer>  -->




<script src="js/miss.js"></script>

<script src="js/gal.js"></script>


</body>
</html>