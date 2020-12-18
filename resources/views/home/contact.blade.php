<!DOCTYPE html>
<html>
<head>
@include('includes/homehead')
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="css/home/contact.css">
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet">
</head>
<body>
   

<!-----------------------NAVBAR------------------------------->
@include("includes/navhome")
 
<!-------------------------NAVBAR END--------------------------------->


<!--------------------------NON-SLIDER----------------------->








<!-- <section class="container-fluid pt-5 non text-center" style="text-transform:uppercase;">
<h1>Contact Us</h1>
<hr>
</section> -->

<!-------------------------TEXT CONTAINER-------------------->
  

<!-------------------------TEXT CONTAINER END---------------->


<!------------------------DETAILS END---------------------->
<div class="container mt-5 mb-5" id="contact-form">
  <div class="row ">
  <div class="col-md-7 mt-3 mb-5">
  <h4 style="text-align:center; margin-bottom:20px; font-weight:bold;">Enquiry</h4>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname"></label>
      <input type="email" class="form-control" id="inputname" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="password" class="form-control" id="inputemail" placeholder="Email">
     
    </div>
  </div>
  <div class="form-row">

  <div class="form-group col-md-6">   
    <label for="inputAddress"></label>
    <input type="text" class="form-control" id="input number" placeholder="Number">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2"></label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Course">
  </div>
</div>
<div class="form-group">
<label for="inputAddress"> </label>
<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
</div>




  <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"placeholder="message"></textarea>
  </div>

  
  <button type="submit" class="btn btn-primary">Enquiry <i class="fas fa-paper-plane"></i></button>
</form>
<!-- <img src=img/support.png class="support">
<h3 class="text">Support</h3> -->


</div>
<div class="col-md-5 contact-div">
  <h2 class="contact-information">Contact Information</h2>
<div>
<h4 class="c-name">HUB IT GROUP PVT.LTD</h4>
</div>


  <ul class="contact-list">
<li class="information">
      <i class="fa fa-home m-1" ></i> Tinkune-Milanchowk , Butwal</li>
      
      <li class="information">
      <i class="fa fa-envelope ml-1 mt-2" style="position:absolute;"></i>
      <a style="padding-left:30px;" >info@hubit.com.np</a>
      <a>| hardware@hubit.com.np| </a>
      <a style="padding-left:30px;">margsoft@hubit.com.np </a> 
      <a  >| website@hubit.com.np</a>
    
    </li>

<li class="information">
      <i class="fa fa-phone m-1"></i> office:- 071-542805</li>

<li class="information">
      <i class="fa fa-phone m-1"></i> sales:- 9857045414 , 9867245414 | <i class="fa fa-whatsapp  m-1"></i><i class="fa fa-skype  m-1"></i> 9857045414</lli>
      
<li class="information">
  <i class="fa fa-phone ml-1 mr-1"></i>|<i class="fa fa-skype  m-1"></i>support software:- 9827494118 </li>

<li class="information">
      <i class="fa fa-phone m-1"></i>support hardware:- 9827494117 , 9827467259</li>

 <li class="information">
      <i class="fa fa-skype  m-1"></i> support hardware:- 9827494116</li>

<li class="information">
      <i class="fa fa-phone  m-1"></i> IT training:- 071-542805 , 9867245414</li>


</ul>

<!-- <img src=img/sales.png class="sales"> -->


</div>
</div>




</div>
</div>





<!------------------------------------MAP---------------------------->
<div class="container-fluid" style="height: 300px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8742753767083!2d83.46012671453796!3d27.690280432849796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39968662a25d8b87%3A0xd99439204a831c46!2sHUB+IT+WORKGROUP!5e0!3m2!1sen!2snp!4v1542103565521" width="100%;" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div><br>

<!-----------------------------------MAP END------------------------->

    <!-- <footer> -->

    @include('includes.footer')

<!-- </footer>  -->


<script src="js/miss.js"></script>

</body>
</html>