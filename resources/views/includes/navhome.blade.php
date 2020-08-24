
<div class="container-fluid p-0">
  <div class="top-header">
      
        
          <div class="col-md-3">&nbsp;<i class="fas fa-phone">&nbsp;</i>071-549281/9857045414/9867245414</div>
      
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
<<<<<<< HEAD
        <div class="col-md-2 hire-talent"><button>Hire Talent</button></div>
=======
<<<<<<< HEAD
        <div class="col-md-2 hire-talent"><button>Hire Talent</button></div>
        <div class="col-md-1 sign-up"><a href="login"><i class="fas fa-user"></i></a></div>
=======
        <div class="col-md-1 hire-talent"><button>Hire Talent</button></div>
>>>>>>> d705793f15230dabe688425185438f38812b5120
        <div class="col-md-1 sign-up"><i class="fas fa-user"></i></div>
>>>>>>> 39305eea426ed918bc10b551e016a31ef83aa306

        

      
  </div> 
</div>

<nav class="navbar navbar-expand-sm  sticky-top " id="head" style="position:sticky; ">

<div class="container" id="image">
<a href="home"><img src="img/logo4.png"></a></div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<i class="fas fa-bars"></i>
</button>
<button class="online-admission-button shortcut " type="button"  ><a href="online-admission">Online-ADM</a>
</button>
<button class="ticket-support-button shortcut" type="button"  > <a href="ticket-support">Ticket-support</a>
</button>


<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="home" id="navitems">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about" id="navitems">About us</a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="career" id="navitems">career</a>
      </li>


      <li class="dropdown nav-item"style="height:40px;" >
        <a class="nav-link" id="navitems">
        gallery
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="ourmembers" >Our members</a></li>
          <li><a class="dropdown-item" href="ourworks" >Our Works</a></li>
          <li><a class="dropdown-item" href="ourpatners" >Our Patners</a></li>
          <li><a class="dropdown-item" href="ourclients" >Our Clients</a></li>
          <li><a class="dropdown-item" href="ourprojects" >Our Projects</a></li>
        </ul>
</li>


      
      


<!--       
      <li class="nav-item">
        <a class="nav-link"  href="gallery">gallery</a>
      </li> -->

      
      <li class="nav-item">
        <a class="nav-link"  href="online-admission" id="navitems">online-Admission</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="ticket-support" id="navitems">Ticket support</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="contact" id="navitems">Contact Us</a>
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

