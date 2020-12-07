<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/training/corporate-training.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,200;1,500&family=Oswald:wght@500&family=Teko:wght@500&family=Ubuntu&display=swap" rel="stylesheet">

    <title>Corporate Training</title>
    @include('includes/traininghead')
</head>
<body>
{{-- @include('includes/navtraining') --}}
@include('frontend.itTraining.common.include.nav')
<!-- top banner div start -->
<div class="banner">
    
<div class="container-fluid text-center header">
  
<h1>CORPORATE<br>
INNOVATION TRAINING</h1>
<p>At Startup Institute, we’re training the modern workforce for the <br> innovation economy. 
Let us help you to develop and retain top talent,<br> oviding employees with the skills,
 mindset and network that will propel <br> your business forward
</p>
  <button type="sumbit">GET STARTED</button>
  </div>

</div>
<!-- top banner div end -->

<!-- create a culture div content start -->

<div class="row create-a-culture">
    <div class="col-md-7">
<div class="heading">

<ul data-rte-list="default">
<h2 style="white-space: pre-wrap;">CREATE A CULTURE
WHERE INNOVATION THRIVES</h2>
<h3 style="white-space: pre-wrap;">Talent development is our core expertise</h3>
    
     <li><p>
     Retain top performers by keeping them engaged and expanding their skill sets. &nbsp;</p></li>

     <li><p>Develop employees with the newest technology and state-of-the-art training.&nbsp;</p></li>

     <li><p>Our partner companies provide thousands of proof points.&nbsp;</p></li>

     <li><p>Customized offerings allow you to incorporate your culture and specific
        requirements into training.&nbsp;</p></li>

     <li><p>Our instructors are practitioners with a deep understanding of current industry
        trends and the skills needed to help businesses grow.&nbsp;</p></li>

      




    </ul>
</div>
    </div>
<!-- create a culture div content end -->



<!-- create a culture div form start -->

    <div class="col-md-5 top-hire">
    <div class="form-div">
     
        <h3>Get Custom On-Site Training</h3>
    <form action="#">
  <div class="row Names">
    <div class="col">
      <label></label>
      <input type="text" class="form-control" placeholder="First Name" required>
    </div>
    <div class="col">
    <label></label>
      <input type="text" class="form-control" placeholder="Last Name" required>
    </div>
  </div>
</form>

<form>
  <div class="row company">
    <div class="col">
    <label></label>
      <input type="text" class="form-control" placeholder="Company" required>
    </div>
    <div class="col">
    <label></label>
      <input type="text" class="form-control" placeholder="Phone" required>
    </div>
  </div>
</form>

<form>
  <div class="row E-mail">
  <div class="col-md-12">
<label></label>
<input class="form-control" type="text" placeholder="E-mail" required>
</div>
</div>
</form>

<form>
  <div class="row Selection">
  <div class="col-md-12">
<label>Services You are Intrested in:</label>
<select class="form-control">
  <option>Select Services</option>
  <option>Hiring Talent</option>
  <option>Innovation Hakathons</option>
  <option>On-Site Training</option>
  
</select>
</div>
</div>
</form>

<div class="row">
  <div class="col-md-12">
<button type="submit" class="btn btn-primary mb-2">Get Started</button>
</div>
    </div>
     </div>
    </div>
</div>

<!-- create a culture div form end -->


<!-- training program start -->
<div class="container-fluid Training-programs text-center">
  <h1>TRAINING PROGRAMS<br>
FOR ORGANIZATIONS OF ALL TYPES & SIZES</h1>
<h3>We’ll apply our innovation-centric methodology to your specific needs.</h3>
<div class="row one">
<div class="col-md-4">
  <div class="row">
<div class="col first">
  <h3>Retain Talent</h3>
  <p>Identifying and Promoting the Right People for Enterprise Innovation Initiatives</p>
  <hr>
  <p>How to Manage Teams Across Generations</p>
  <hr>
  <p>Building a Culture Employees Won’t Want to Leave</p>
  <hr>
  <p>Designing Employee Reviews that Develop and Retain Top Talent</p>

<button type="submit" class="btn btn-primary mb-2 ">Get Started</button>
</div>

</div>
  
</div>



<div class="col-md-4">
  <div class="row">
<div class="col second">
  <h3>Develop Staff</h3>
  <p>Customized skill building workshops to grow cross-functional collaboration, and develop growth mindsets</p>
  <hr>
  <p>Design innovation hackathons</p>
  <hr>
  <p>Tools and Vocabulary for the Digital Economy</p>
  <hr>
  <p>Sales management workshops to grow pitch, and presentation skills</p>

<button type="submit" class="btn btn-primary mb-2 ">Get Started</button>
</div>

</div>
  
</div>



<div class="col-md-4">
  <div class="row">
<div class="col third">
  <h3>Recruit Smarter</h3>
  <p>Customized recruiting workshops for early-stage, high-growth, and established </p>
  <hr>
  <p>Building a Best Practice Recruiting Process</p>
  <hr>
  <p>Identifying Success Characteristics and Key Competencies</p>
  <hr>
  <p>Assessment Tools for Measuring Key Competencies for Innovation</p>

<button type="submit" class="btn btn-primary mb-2 ">Get Started</button>
</div>

</div>
  
</div>


</div>
</div>

<!-- training program end-->




<!-- in -person training start -->

<div class="container-fluid connect">
<h2>IN-PERSON TRAINING AT YOUR OFFICE OR SCHOOL</h2>
<p>Whether you want to give your employees a break from the office,
or give your students a glimpse into the innovation sector, we can make the logistics fit your needs.</p>
<button type="submit" class="btn btn-primary mb-2 ">Get Started</button>
   

</div>
<!-- in -person training end -->

@include('includes/footer')
    
</body>
</html>