
<div class="container-fluid p-0">
  <div class="top-header">
      
        
          <div class="col-md-4">&nbsp;<i class="fas fa-phone">&nbsp;</i>071-549281/9857045414/9867245414</div>
      
        <div class="col-md-2 text-center"><i class="fas fa-envelope mr-2" ></i>&nbsp;info@hubit.com.np</div>
        <div class="col-md-2 text-center " id="miss"></div>
        
        <div class="col-md-2 text-center top-social-icon">
        <a href="facebook.com" class="icon-social" ><i class="fab fa-facebook-square" ></i></a>
        <a href="facebook.com" class="icon-social" ><i class="fab fa-twitter-square" ></i></a>
        <a href="facebook.com" class="icon-social" ><i class="fab fa-linkedin" ></i></a>
        <a href="facebook.com" class="icon-social" ><i class="fab fa-instagram" ></i></a>
        <a href="facebook.com" class="icon-social" ><i class="fab fa-youtube" ></i></a>

        <a href="facebook.com" class="icon-social" ><i class="fab fa-google" ></i></a>
        </div>
        <div class="col-md-1 hire-talent"><button>Hire Talent</button></div>

        
        <div class="col-md-1 sign-up"><a href="login"><i class="fas fa-user"></i></a></div>
       


        

      
  </div> 
</div>

<nav class="navbar navbar-expand-sm  sticky-top m-0 p-2" id="head" style="position:sticky; ">

<div class="container" id="image">
<a href="home"><img src="img/logo4.png"></a></div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<i class="fas fa-bars"></i>
</button>
<button class="online-admission-button shortcut " type="button"  ><a href="online-admission">Online-ADM</a>
</button>
<button class="ticket-support-button shortcut" type="button"  > <a href="ticket-support">Ticket-support</a>
</button>


<div class="collapse navbar-collapse p-0" id="collapsibleNavbar">
  <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="home-training" id="navitems">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="courses" id="navitems">Courses</a>
      </li>
      

      <li class="nav-item">
        <a class="nav-link" href="aboutus" id="navitems">About us</a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="career-training" id="navitems">career</a>
      </li>


      <li class="dropdown nav-item"style="height:40px;" >
        <a class="nav-link" id="navitems" style="height:50px;">
        For BUsiness
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="business-services" >Business services</a></li>
          <li><a class="dropdown-item" href="hire-top-talent" >Hire Top Talent</a></li>
          <li><a class="dropdown-item" href="corporate-training" >Corporate Training</a></li>
          <li><a class="dropdown-item" href="customs-hackathons" >Customs Hackathons</a></li>
          <li><a class="dropdown-item" href="corporate-patners" >Corporate Patners</a></li>



        </ul>
</li>


      
      


<!--       
      <li class="nav-item">
        <a class="nav-link"  href="gallery">gallery</a>
      </li> -->

      
      <li class="nav-item">
        <a class="nav-link"  href="library" id="navitems">Library</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="examination" id="navitems">Examination</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="blogs" id="navitems">Blogs</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="contactus" id="navitems">Contact Us</a>
      </li> 

   
       

  </ul>
</div> 
</nav>

<script>
        var a = ['For Enquiry Call Us On', '9857045414'];

        textSequence(0);
        function textSequence(i) {

            if (a.length > i) {
                setTimeout(function() {
                    document.getElementById("miss").innerHTML = a[i];
                    textSequence(++i);
                }, 2000); // 1 second (in milliseconds)

            } else if (a.length == i) { // Loop
                textSequence(0);
            }

        }
    </script>

