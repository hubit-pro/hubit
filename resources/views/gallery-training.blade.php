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
        <h3>Training-->Gallery</h3>
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
          <div class="tab" onclick="tab1()"><h6>Our Members</h6></div>
        </div>
        <div class="col-xl-12 p-2">
          <div class="tab" id="tab2" onclick="tab2()"><h6>Our Interns</h6></div>
        </div>
        <div class="col-xl-12 p-2">
          <div class="tab" id="tab3" onclick="tab3()"><h6>Friday Programmes</h6></div>
        </div>
        <div class="col-xl-12 p-2">
          <div class="tab" id="tab4" onclick="tab4()"><h6>Our Students Projects</h6></div>
        </div>
        <div class="col-xl-12 p-2">
          <div class="tab" id="tab5" onclick="tab5()"><h6>Our Premises</h6></div>
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
            <p>Hari Banjade<br>CEO of HUB IT GROUP PVT LTD.<br>Computer Engineering</p>
          </div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/niraj.jpg">
          <div class="ingallen">
            <p>Niraj Thapa Chhetry<br>Operations Manager<br>Computer Engineering</p>
          </div>
        </div>
      </div>
    </div>
<!------------members end---------->

<!------------interns start---------->
    <div class="col-xl-10 panel" id="panel2">
      <div class="row">
        <div class="col-xl-3 p-1 gallen">
          <img src="img/naran.jpg">
          <div class="ingallen">
            <p>Narayan Poudel<br>Intern as Web Developer<br>BCA, Kalika M.H.S.S</p>
          </div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/lara.jpg">
          <div class="ingallen">
            <p>Geeta Thapa<br>Intern as Web Designer<br>B.Ed, Bahumukhi Campus</p>
          </div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/sam.jpg">
          <div class="ingallen">
            <p>Simran Pokhrel<br>Intern as Tally Instructor<br>B.B.S, Bnijya Campus</p>
          </div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/dhiraj.jpg">
          <div class="ingallen">
            <p>Dhiraj Kaucha<br>Intern as Graphic Designer<br>+2, New Enviroment</p>
          </div>
        </div>
      </div>
    </div>
<!------------interns end---------->

<!------------friday programmes---------->
    <div class="col-xl-10 panel" id="panel3">
      <div class="row">
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/new8.jpg">
          <div class="ingallen"></div>
        </div>  
        <div class="col-xl-3 p-1 gallen">
          <img src="img/f.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/friday4.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/friday3.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/friday2.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/friday1.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/a.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/g.jpg">
          <div class="ingallen"></div>
        </div>
        
      </div>
    </div>
<!------------friday programmes end---------->

<!------------projects start---------->
    <div class="col-xl-10 panel" id="panel4">
      <div class="row">
         
        <div class="col-xl-3 p-1 gallen">
          <img src="img/new1.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/new2.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/new3.png">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/new4.png">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/new5.png">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/new6.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/new7.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/new8.jpg">
          <div class="ingallen"></div>
        </div>  
        <div class="col-xl-3 p-1 gallen">
          <img src="img/t.jpg">
          <div class="ingallen"></div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/k.jpg">
          <div class="ingallen"></div>
        </div>
        
      </div>
    </div>
<!------------projects end---------->

<!------------premises start---------->
    <div class="col-xl-10 panel" id="panel5">
      <div class="row">
        <div class="col-xl-3 p-1 gallen">
          <img src="img/prim1.jpg">
          <div class="ingallen">
            <p>Main Office</p>
          </div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/d.jpg">
          <div class="ingallen">
            <p>Classroom</p>
          </div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/c.jpg">
          <div class="ingallen">
            <p>Classrom</p>
          </div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/prim2.jpg">
          <div class="ingallen">
            <p>Classrom</p>
          </div>
        </div>
        <div class="col-xl-3 p-1 gallen">
          <img src="img/prim3.jpg">
          <div class="ingallen">
            <p>Hardware Room</p>
          </div>
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