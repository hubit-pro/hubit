<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Services</title>
    @include('includes/traininghead')
    <link rel="stylesheet" type="text/css" href="css/business-services.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,200;1,500&family=Oswald:wght@500&family=Teko:wght@500&family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
@include('includes/navtraining')
<div class="banner">
    
<img src="img/business-services.jpg">
<div class="container-fluid text-center">
<h1><strong>BUILDING TALENT FOR GROWTH & INNOVATION</strong></h1>
<p>At Startup Institute, we’re training the modern workforce for the innovation economy.
 Now more than ever, it’s critical to retain top talent and ensure you are providing employees
  with the tools that will propel your business forward.</p>
  </div>
  <button>GET STARTED</button>
</div>
<div class="row innovation">
    <div class="col-md-5">
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

    <div class="col-md-6 top-hire">
    <form>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputname">Name</label>
      <input type="text" class=" no-border" id="inputname" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" class="no-border" id="inputemail" placeholder="">
    </div>
  </div>
  <div class="form-row">

  <div class="form-group col-md-6">  
    <label for="inputAddress">Mobile Number</label>
    <input type="number" class="no-border" id="input number" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">telephone</label>
    <input type="number" class="no-border" id="input number1" placeholder="">
  </div>
</div>
<div class="form-group">
<label for="inputAddress">Address </label>
<input type="text" class="no-border" id="inputAddress2" placeholder="">
</div>






    
       <div class="form-group">
    <label for="seeAnotherField">YOUR PROBLEMS</label>
    <select class="no-border" id="seeAnotherField">
          <option value="no"></option>
          <option value="yes">HARDWARE</option>
          <option value="true">SOFTWARE</option>
          <option value="y">Networking</option>


    </select>
  </div> 
           
                <div class="form-group">
                      <label for="exampleFormControlFile1">ATTACHMENT</label>
                      <input type="file" class="no-border-file" id="exampleFormControlFile1">
                 </div>

                <div class="form-group">
                    <textarea name="txtMessage" class="no-border" placeholder="Describe your Problems!! " required="" 
                   ></textarea>
                </div>
     
    </div>
</div>
@include('includes/footer')
    
</body>
</html>