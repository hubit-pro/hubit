<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Services</title>
    @include('includes/traininghead')
    <link rel="stylesheet" type="text/css" href="css/training/business-services.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,200;1,500&family=Oswald:wght@500&family=Teko:wght@500&family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
@include('includes/navtraining')
<div class="banner">
    
<img src="img/business-services.jpg">
<div class="container-fluid text-center header">
<h1><strong>BUILDING TALENT FOR GROWTH & INNOVATION</strong></h1>
<p>At Startup Institute, we’re training the modern workforce for the innovation economy.
 Now more than ever, it’s critical to retain top talent and ensure you are providing employees
  with the tools that will propel your business forward.</p>
  </div>
  <button>GET STARTED</button>
</div>
<div class="row innovation">
    <div class="col-md-6">
    <h2 style="white-space: pre-wrap;"><strong>INJECT INNOVATION<br>INTO YOUR BUSINESS</strong></h2>
    <h3 style="white-space: pre-wrap;">Developing talent for high-growth and innovative companies is our core expertise:</h3>
     <ul data-rte-list="default">
     <li><p >Startup Institute <a href="/hire">hiring partners</a> get unlimited
      access to over 1,500 web development,digital marketing, web design, and sales alumni
       who have gone through our programs and have come out ready to hit the ground running.<br>&nbsp;</p></li>

     <li><p >Our <a href="/training">corporate training services</a>&nbsp;are
      practical and easy to adapt to your organization’s needs<br>&nbsp;</p></li>

     <li><p >Looking to inject some innovation into your corporate
      culture? Our <a href="/corporate-innovation/custom-hackathons/">custom hackathon program</a> helps 
      companies and teams come together,solve challenges, and recruit top talent.&nbsp;</p></li>
      
    </ul>
    </div>

    <div class="col-md-4 top-hire">
        <h3>Hire Top Talent</h3>
    <form action="#">
  <div class="row Names">
    <div class="col">
      <label>First Name</label>
      <input type="text" class="form-control" placeholder="" required>
    </div>
    <div class="col">
    <label>Last Name</label>
      <input type="text" class="form-control" placeholder="" required>
    </div>
  </div>
</form>

<form>
  <div class="row company">
    <div class="col">
    <label>Company</label>
      <input type="text" class="form-control" placeholder="" required>
    </div>
    <div class="col">
    <label>Phone</label>
      <input type="text" class="form-control" placeholder="" required>
    </div>
  </div>
</form>

<form>
  <div class="row E-mail">
  <div class="col-md-12">
<label>E-mail</label>
<input class="form-control" type="text" placeholder="" required>
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
  <option>Part-time Training Programs</option>
  <option>Innovation Hakathons</option>
  <option>On-Site Training</option>
  <option>Licensing Startup Institue Curriculum</option>
</select>
</div>
</div>
</form>

<button type="submit" class="btn btn-primary mb-2">Get Started</button>
     
    </div>
</div>

<div class="container-fluid Michale">
  <p>"Startup Institute is a hiring pipeline for us. Just like the big accounting / 
    law firms and consultancies hang around Ivy league colleges to poach the best and 
    brightest from the class, we partner with Startup Institute to tap into talent trained 
    for the new economy."</p>
<h6>— Michael Taylor, Co-founder and COO, Ladder.io</h6>
</div>

<div class="container-fluid Programs">
  <h2>PROGRAMS TO MEET YOUR ORGANIZATION'S NEEDS</h2>
<div class="row">
  <div class="col-md-6">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
  <div class="col-md-6">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>

</div>
<div class="row">
  <div class="col-md-6">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
  <div class="col-md-6">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>

</div>


</div>

<div class="container-fluid connect">
<h1>READY TO GET STARTED?</h1>
<p>Uniquely positioned at the center of tech ecosystems, we've designed our programs
   to open new doors for you.</p>
   <a href="#" class="btn btn-primary">Go somewhere</a>

</div>

@include('includes/footer')
    
</body>
</html>