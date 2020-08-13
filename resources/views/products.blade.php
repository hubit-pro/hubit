
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


<!--------------------------NON-SLIDER----------------------->
<section class="container-fluid p-0 non" style="position: relative;">

  <img src="img/train.jpg">


<!-------------------------TEXT CONTAINER-------------------->
  <section class="container-fluid" id="topper"><!--this id "topper" is the transparent box over the slider--->

    <div class="row pt-5 pb-4 rib">
   

    <div class="row">
      <div class="col-xl-12 text-center" style="color: white;">
        <h3>Solution-->Product</h3>
      </div>
    </div>

  </section>

</section>
<!-------------------------TEXT CONTAINER END---------------->


<!-- -----------------GALLERY START-------------->
<section class="container-fluid p-5">
  <div class="row">

<!------------tabs start---------->
    <div class="col-xl-12 tabs">
      <div class="row click">
        <div class="col-xl-2 p-2">
          <div class="tab" id="tab1" onclick="tab1()"><h6>Cameras</h6></div>
        </div>
        <div class="col-xl-2 p-2">
          <div class="tab" id="tab2" onclick="tab2()"><h6>Intercom/Telephone</h6></div>
        </div>
        <div class="col-xl-2 p-2">
          <div class="tab" id="tab3" onclick="tab3()"><h6>Biometrics</h6></div>
        </div>
        <div class="col-xl-2 p-2">
          <div class="tab" id="tab4" onclick="tab4()"><h6>Computer Parts</h6></div>
        </div>
        <div class="col-xl-2 p-2">
          <div class="tab" id="tab5" onclick="tab5()"><h6>Printer Parts</h6></div>
        </div>
        <div class="col-xl-2 p-2">
          <div class="tab" id="tab6" onclick="tab6()"><h6>More Products</h6></div>
        </div>
      </div>
    </div>
<!------------tabs end---------->

<!------------camera start---------->
    <div class="col-xl-12 panel" id="panel1">
      <div class="row">
          
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam1.jpg">
          <div class="ingallen">
              <p><ins>720P High resolution AHD Bullet camera</ins></p>
              <ul>
                  <li>720P resolution real time image.</li>
                  <li>HD AHD lossless vedio output</li>
                  <li>2.8mm fixed lens.</li>
                  <li>36 PCS IR LED, 30m IR distance.</li>
                  <li>High performance color re-production.</li>
                  <li>Double glass + hoop unique design</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam2.png">
          <div class="ingallen">
              <p><ins>Single 2.0MP AHD Bullet Camera</ins></p>
              <ul>
                  <li>1080 high resolution AHD bullet camera.</li>
                  <li>3.6mm fixed lens.</li>
                  <li>36 PCS IR LED.</li>
                  <li>Built in 3-axis bracket.</li>
                  <li>High performance color re-production.</li>
                  <li>Double glass + hoop unique design</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam3.jpg">
          <div class="ingallen">
              <p><ins>2.0MP AHD Bullet Camera</ins></p>
              <ul>
                  <li>1080 high resolution AHD bullet camera.</li>
                  <li>3.6mm fixed lens.</li>
                  <li>36 PCS IR LED.</li>
                  <li>Built in 3-axis bracket.</li>
                  <li>High performance color re-production.</li>
                  <li>Double glass + hoop unique design</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam4.jpg">
          <div class="ingallen">
              <p><ins>1080P AHD Bullet Camera</ins></p>
              <ul>
                  <li>2.0MP AHD bullet camera.</li>
                  <li>HD AHD lossless vedio output</li>
                  <li>3.6mm fixed lens.</li>
                  <li>36 PCS IR LED, 100ft night vision</li>
                  <li>Built in 3-axis bracket.</li>
                  <li>High performance color re-production.</li>
                  <li>Double glass + hoop unique design</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam5.jpg">
          <div class="ingallen">
              <p><ins>4MP AHD IR Bullet Camera</ins></p>
              <ul>
                  <li>4MP high resolution AHD bullet camera.</li>
                  <li>1/3 omni vision CMOS SENSOR OV 4689</li>
                  <li>3.6mm fixed lens.</li>
                  <li>36 PCS IR LED, 100ft night vision</li>
                  <li>Built in 3-axis bracket.</li>
                  <li>High performance color re-production.</li>
                  <li>Double glass + hoop unique design</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam6.jpg">
          <div class="ingallen">
              <p><ins>Single 1MP AHD Dome Camera</ins></p>
              <ul>
                  <li>720P high resolution AHD dome camera.</li>
                  <li>2.8mm fixed lens.</li>
                  <li>22 PCS IR LED, 100ft night vision</li>
                  <li>Elegant appearance</li>
                  <li>High performance color re-production.</li>
                  <li>Double glass + hoop unique design</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam7.jpg">
          <div class="ingallen">
              <p><ins>1.3MP Vandal proof Dome IR HD AHD</ins></p>
              <ul>
                  <li>130 degree fish eye camera.</li>
                  <li>Using the high performance sensor.</li>
                  <li>Image is clear and delicate.</li>
                  <li>Analog HD 960P@AHD-M output.</li>
                  <li>Can access to many brands AHD DVR.</li>
                  <li>Support OSD menu.</li>
                  <li>Support ultra low illumination.</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam8.jpg">
          <div class="ingallen">
              <p><ins>2.0MP AHD dome camera</ins></p>
              <ul>
                  <li>1080P resolution real time image.</li>
                  <li>3.6mm fixed lens.</li>
                  <li>36 PCS IR LED, 100ft night vision</li>
                  <li>High performance color re-production.</li>
                  <li>Double glass + hoop unique design</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam9.jpg">
          <div class="ingallen">
              <p><ins>Single 1080P AHD dome camera</ins></p>
              <ul>
                  <li>1080P resolution real time image.</li>
                  <li>30mm fixed lens.</li>
                  <li>36 PCS IR LED, 100ft night vision</li>
                  <li>IR waterproof dome camera</li>
                  <li>High performance color re-production.</li>
                  <li>Double glass + hoop unique design</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam10.png">
          <div class="ingallen">
              <p><ins>2.0MP 4X auto-focus AHD dome camera</ins></p>
              <ul>
                  <li>1/2 2.1MP CMOS image sensor.</li>
                  <li>Motorized VF lens, 2.8-12mm lens.</li>
                  <li>36 PCS IR LED, 20m IR distance</li>
                  <li>High performance color re-production.</li>
                  <li>Double glass + hoop unique design</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam11.jpg">
          <div class="ingallen">
              <p><ins>4.0MP indoor IR AHD dome camera</ins></p>
              <ul>
                  <li>High resolution AHD dome camera.</li>
                  <li>1/3 omni vision CMOS sensor OV4689.</li>
                  <li>3.6mm fixed lens.</li>
                  <li>36 PCS IR LED, upto 100ft night vision.</li>
                  <li>High performance color re-production.</li>
                  <li>Double glass + hoop unique design</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam12.jpg">
          <div class="ingallen">
              <p><ins>1080P resolution 4in1 AHD PTZ</ins></p>
              <ul>
                  <li>3x opticalzoom indoor camera.</li>
                  <li>4in1 HD analog(AHD,TVI,CVBS) video output.</li>
                  <li>Day/night(ICR), auto iris, autofocus, AWB, AGC, BLC.</li>
                  <li>Upto 128 presets, 4 auto scan, 4 tour, 4 pattern.</li>
                  <li>Pan 360deg endless rotation, tilt 90deg with auto flip.</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/cam13.png">
          <div class="ingallen">
              <p><ins>1080P resolution 3in1 AHD PTZ</ins></p>
              <ul>
                  <li>20x opticalzoom indoor/outdoor camera.</li>
                  <li>3in1 HD analog(AHD,TVI,CVBS) video output.</li>
                  <li>Max 25/30fps@1080P resolution.</li>
                  <li>Upto 128 presets, 4 auto scan, 4 tour, 4 pattern.</li>
                  <li>Auto iris, autofocus, AWB, AGC, BLC.</li>
              </ul>
          </div>
        </div>
        
      </div>
    </div>
<!------------camera end---------->

<!------------intercom start---------->
    <div class="col-xl-12 panel" id="panel2">
      <div class="row">
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/pab.png">
          <div class="ingallen">
              <p><ins>PABX Call recorder</ins></p>
              <ul>
                  <li>Record capacity: 2CO-lines.</li>
                  <li>Storage: PC storage used.</li>
                  <li>Monitor real time cals.</li>
                  <li>Record extensions.</li>
                  <li>Call charge account.</li>
                  <li>Multiple control.</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/ph1.jpg">
          <div class="ingallen">
              <p><ins>Master key phone digital set</ins></p>
              <ul>
                  <li>RVisual system programming to PABX.</li>
                  <li>12 programmable funtional keys.</li>
                  <li>14 function buttons.</li>
                  <li>4 navigation buttons.</li>
                  <li>Call charge account.</li>
                  <li>Compatible with  MK-308, CP-832, CP-1686 etc..</li>
              </ul>
          </div>
        </div>
        
                <div class="col-xl-3 p-1 gallen">
          <img src="img/ph2.jpeg">
          <div class="ingallen">
              <p><ins>Landline</ins></p>
              <ul>
                  <li>10 speed dial button.</li>
                  <li>Storage: PC storage used.</li>
                  <li>Call record, date & time display.</li>
                  <li>Operator, call transfer, call pickup, DND, call al extensions.</li>
                  <li>Compatible with all sintech PABX.</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/ph3.jpg">
          <div class="ingallen">
              <p><ins>2 Line intercom phone set</ins></p>
              <ul>
                  <li>Call between two phone.</li>
                  <li>Storage: PC storage used.</li>
                  <li>Work upto 150m long distance.</li>
                  <li>Clear voice quality..</li>
                  <li>No electricity needed for work.</li>
                  <li>Best for small business uses.</li>
              </ul>
          </div>
        </div>


        
      </div>
    </div>
<!------------intercom end---------->

<!------------biometrics start---------->
    <div class="col-xl-12 panel" id="panel3">
      <div class="row">
          
        <div class="col-xl-3 p-1 gallen">
          <img src="img/bio1.PNG">
          <div class="ingallen">
              <p><ins>K 20 Pro</ins></p>
              <ul>
                  <li>Fingerprint Capacity 1,000.</li>
                  <li>Card Capacity 1,000.</li>
                  <li>Transcation Storage 100,000.</li>
                  <li>Fingerprint Sensor 500 DPI Optical Sensor</li>
                  <li>Build in Battery Backup 3.5hrs.</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/bio2.PNG">
          <div class="ingallen">
              <p><ins>K30 Pro</ins></p>
              <ul>
                  <li>Fingerprint Capacity 1,000.</li>
                  <li>Card Capacity 1,000.</li>
                  <li>Transcation Storage 100,000.</li>
                  <li>Fingerprint Sensor 500 DPI Optical.</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/bio3.PNG">
          <div class="ingallen">
              <p><ins>WL20</ins></p>
              <ul>
                  <li>Fingerprint Capacity 1,000.</li>
                  <li>Card Capacity -NO.</li>
                  <li>Transcation Storage 100,000.</li>
                  <li>Fingerprint Sensor 500 DPI Optical.</li>
                  <li>Build in Wifi.</li>
              </ul>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/bio4.PNG">
          <div class="ingallen">
              <p><ins>X990</ins></p>
              <ul>
                  <li>Fingerprint Capacity 10,000.</li>
                  <li>Card Capacity 10,000.</li>
                  <li>Transcation Storage 100,000.</li>
                  <li>Fingerprint Sensor 500 DPI Optical Sensor</li>
                  <li>CPU 32 bit microprocessor 800 MHZ.</li>
                  <li>Optional features Wifi, Battery ,3G, GPRS.</li>
              </ul>
          </div>
        </div>
          
      </div>
    </div>
<!------------biometrics end---------->

<!------------computer start---------->
    <div class="col-xl-12 panel" id="panel4">
      <div class="row">
          
        <div class="col-xl-3 p-1 gallen">
          <img src="img/par1.JPG">
          <div class="ingallen">
              <p>Complete computer set for personal use, school, office, shop, resturant, hotel and more of any company.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/par2.jpg">
          <div class="ingallen">
              <p>ASUS Monitor.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/par3.jpg">
          <div class="ingallen">
              <p>DELL Monitor.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/par4.jpg">
          <div class="ingallen">
              <p>LG Monitor.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/par5.jpg">
          <div class="ingallen">
              <p>ACER Monitor.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/par6.jpg">
          <div class="ingallen">
              <p>C.P.U</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/par7.jpg">
          <div class="ingallen">
              <p>Mouse.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/par8.jpg">
          <div class="ingallen">
              <p>Web camera.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/par9.jpg">
          <div class="ingallen">
              <p>Cooling fan.</p>
          </div>
        </div>
        
      </div>
    </div>
<!------------computer end---------->

<!------------printer start---------->
    <div class="col-xl-12 panel" id="panel5">
      <div class="row">
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/prin1.jpg">
          <div class="ingallen">
              <p>Printer.</p>
          </div>
        </div>
        
      </div>
    </div>
<!------------printer end---------->

<!------------more  start---------->
    <div class="col-xl-12 panel" id="panel6">
      <div class="row">
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/more1.gif">
          <div class="ingallen">
              <p>All kind of fire extinguisher.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/more2.jpg">
          <div class="ingallen">
              <p>Wireless & portable speakers.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/more3.png">
          <div class="ingallen">
              <p>Speakers.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/more4.jpg">
          <div class="ingallen">
              <p>8GB Sandisk pendrive.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/more5.jpg">
          <div class="ingallen">
              <p>32GB HP pendrive.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/more6.jpg">
          <div class="ingallen">
              <p>Universal memory card reader.</p>
          </div>
        </div>
        
        <div class="col-xl-3 p-1 gallen">
          <img src="img/more7.jpg">
          <div class="ingallen">
              <p>Headphone.</p>
          </div>
        </div>
        
      </div>
    </div>
<!------------more end---------->

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