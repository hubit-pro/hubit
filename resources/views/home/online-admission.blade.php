<!DOCTYPE html>
<html lang="en"  style="zoom:0.8 !important;">
<head>
    
    @include('includes/homehead')
	<title>Online-Admission</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, ">
  <link rel="stylesheet" type="text/css" href="css/home/online-admission.css">
  


 

    
    <title>Online-Admission</title>
</head>
<body>
@include('includes/navhome')

<div class="container ">

        
	<section class="row m-0">
		<div class="col-md-8 p-0 dark-bg">
		    <img src="img/addminsion-open.jpg" class="img-responsive">
     			
		</div>
    <div class="col-md-4 p-0 light-bg faq"><h4 >What Happens After I Apply?</h4><p>
Our admissions team will be in touch to schedule a call. During the call, they'll work with you to determine whether this is the right program at the right time for you.
</p>

<h4>Can I Change My Course?</h4>
<p>Of course! Our admissions team will help select the right Course if you have any questions.</p></div>
	</section>	
	


	<section class="personal-details light-bg">
		<br>

		<form class="form-horizontal"  method="post" enctype="multipart/form-data">

		<form class="form-horizontal" route="" method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="bS0IzKMqVwwwtmxIQvKndeHYxtxj5j8naZiiCjnS">
			




			<div class="heads dark-bg" ><h2>SECTION ONE: PERSONAL DATA</h2></div>
			<fieldset>
				<legend>Personal Details</legend>
				<div class="form-group">
				  	<label class="col-md-3 control-label" for="textinput">Name <span>*</span></label>  
				  	<div class="col-md-3">
					  <input id="textinput" name="first_name" type="text" placeholder="First Name" class="form-control input-md" value="" required="">
					</div>
				  	<div class="col-md-3">
					  <input id="textinput" name="middle_name" type="text" placeholder="Middle Name" class="form-control input-md" value="">
					</div>
				  	<div class="col-md-3">
					  <input id="textinput" name="last_name" type="text" placeholder="Last Name" class="form-control input-md" value="" required="">
					</div>
				</div>
				<div class="form-group">
				  <label class="col-md-3 control-label" for="textinput">Date Of Birth <span>*</span></label>  
				  <div class="col-md-3">
				  <input id="textinput" type="date" name="dob" placeholder="Date Of Birth" class="form-control input-md" value="" required="">
				  </div>
				  <label class="col-md-3 control-label" for="gender">Gender <span>*</span></label>
				  <div class="col-md-3"> 
				    <label class="radio-inline" for="gender-0">
				      <input type="radio" name="gender" id="gender-0" value="Male" required="">
				      Male
				    </label> 
				    <label class="radio-inline" for="gender-1">
				      <input type="radio" name="gender" id="gender-1" value="Female">
				      Female
				    </label> 
				    <label class="radio-inline" for="gender-2">
				      <input type="radio" name="gender" id="gender-2" value="Others">
				      Others
				    </label>
				  </div>
				</div>


				
			<fieldset>
				<legend>Contact Details</legend>
				<div class="form-group">
				  <label class="col-md-3 control-label" for="textinput">Permanent Address <span>*</span></label>  
				  	<input id="textinput" name="p_address" type="text" class="form-control input-md" value="" required="">
				   </div>
				
				<div class="form-group">
				  <label class="col-md-3 control-label" for="textinput">Telephone No. </label>  
				  <div class="col-md-3">
				  	<input id="textinput" name="tel_no" type="number" class="form-control input-md" value="">
				   </div>
				   <label class="col-md-3 control-label" for="textinput">Mobile No. <span>*</span></label>  
				  <div class="col-md-3">
				  	<input id="textinput" name="mobile" type="number" class="form-control input-md" value="" required="">
				   </div>
				   <label class="col-md-3 control-label" for="textinput">E-mail</label>  
				  	<input id="textinput" name="email" type="email" class="form-control input-md" value="">
				</div>
			</fieldset>








			
			<div class="heads dark-bg" ><h2>SECTION TWO: APPLICATION</h2></div>
			<fieldset>

			
			<div class="form-groups">
    <label for="seeAnotherField">courses</label>
    <select class="Course" id="seeAnotherField">
          <option value="no"></option>
          <option value="account">Accounting Package</option>
          <option value="hardware">Computer Hardware & Networking</option>
		  <option value="webapp">Web App Development</option>
		  <option value="graphics">Graphics Design</option>
          <option value="multimedia">Multimedia & animation</option>
		  <option value="software">Software Development</option>
		  <option value="programming">Programming Courses</option>
		  <option value="webdesign">Webdesign and development</option>
		  
		  
		  
		  </select>
  
  <div class="form-group" id="otherFieldDiv">
    <label for="otherField">Sub-course</label>
    <select class="no-border" id="otherField">
	<option value="">Full-course</option>
    <option  value="">tally ERP.9</option>
      <option value="">Banking training</option>
      <option value="">Creating Book, charts of financial reports</option>
      <option value="">3 days extra offician training</option>
    </select>
  </div>

  
  <div class="form-group" id="otherFieldDiv1">
    <label for="otherField">Sub-course</label>
    <select class="no-border" id="otherField">
	<option value=""></option>
     <option value="">Complete Desktop Repairing</option>
      <option value="">Laptop Repairing</option>
      <option value="">MotherBoard & chip level repairing</option>
      <option value="">Concepts of IP/types</option>
	  <option value="">Knowledge on wired & Wireless Network</option>
      <option value="">File & Hardware Sharing</option>
	  
    </select>
  </div>

  
  
  <div class="form-group" id="otherFieldDiv2">
    <label for="otherField">Sub-Course</label>
    <select class="no-border" id="otherField">
      <option value=""></option>
      <option value="">Django</option>
      <option value="">Ruby</option>
      <option value="">Python</option>
	  <option value="">Rails</option>
      <option value="">Ajax</option>
	  
    </select>
  </div>
  </div>

  <div class="form-groups">
    <label>Timing</label>
    <select class="no-border" id="seeAnotherField">
          <option></option>
          <option>Morning</option>
          <option>Midday</option>
		  <option>Evening</option>
		  
		  
		  </select>
		</div>
         </fieldset>





			
			<div class="heads dark-bg" ><h2>SECTION FOUR: COMPUTER COURSE PREVIOUSLY TAKEN</h2></div>
			<fieldset>
				<div class="form-group">
				  <label class="col-md-12 control-label" style="text-align: left;" for="activities">Please list your course</label>
				  <div class="col-md-12">                     
				    <textarea class="form-control" id="eca" name="eca" rows="10" value=""></textarea>
				  </div>
				</div>
			</fieldset>
			



			<div class="heads dark-bg" ><h2>SECTION SEVEN: BOOK YOUR SEAT</h2></div>
			<fieldset>
			    <p>You could book a seat at HUB IT Training Center/ College by uploading the scanned copy of cash deposited voucher from one of the following banks.</p>
			    <div class="row">
    			    <div class="col-md-4">
    			        <p><b>HUB IT Training & Solution</b><br>
    			        Milanchowk, Butwal, Nepal<br>
    			        Bank Name: Shine Resunga Bank <br>
    			        Branch Name: Yogikuti  <br>
    			        Account Number:<b> </b></p>
    			    </div>
    			    <div class="col-md-4">
    			        <p><b>HUB IT GROUP PVT.LTD</b><br>
    			        Milanchowk, Butwal, Nepal<br>
    			        
    			        
    			    </div>
    			    <div class="col-md-4">
    			        <img src="https://timescollege.edu.np/public/qr.jpg" style="max-width:100%">
    			    </div>
			    </div>
				<div class="form-group" style="margin-top:30px;">
				  <label class="col-md-4 control-label" for="marksheet">Scanned Copy of voucher</label>
				  <div class="col-md-4">
				    <input id="voucher" name="voucher" class="input-file" type="file">
				  </div>
				</div>
				
			    <div class="rules" >
				<h3>Rules & Regulations</h3>1. He/She will be responsible for any damage done to the property owned by the instution and will be charched accordingly.<br>
				2. Half of the fee should be paid within first week and remaining should be paid by the end of the second week .<br>3. Fees are not refundable.<br>
                4. Students should inform to the Institution if He/She cannot attend the class.<br>
				5. It is compulsary to attend any extra classes, seminars, field visits and internships and othe programs that institution sees fit to deploy any students with respective to their course and field of intrest.
				</div>
				 <div class="form-group">
				  <div class="col-md-12">
				  <div class="checkbox">
				    <label for="terms-0">
				      <input type="checkbox" name="terms" id="terms-0" value="1" required="">I accept above terms and conditions.
				    </label>
					</div>
				  </div>
				</div> 
			


				<div class="form-group">
				  <div class="col-md-12 text-center mt-5 mb-2">
				    <button id="singlebutton" name="singlebutton" type="submit" class="btn btn-primary">Submit</button>
				  </div>
				</div>
			</fieldset>
		</form>
	</section>
	
	</div> 





@include('includes/footer')





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>

<script>
        $(document).ready(function(){
            $("select.level").change(function(){
                var selectedLevel = $(this).children("option:selected").val();
                if(selectedLevel == 'Masters'){
                    $(".b").prop('required',true);
                    $(".i").prop('required',true);
                    $(".s").prop('required',true);
                    document.getElementById('inter').style.display = 'block';
                    document.getElementById('bachelor').style.display = 'block';
                    document.getElementById('see').style.display = 'block';
                }
                else if(selectedLevel == 'Bachelors'){
                    $(".b").prop('required',false);
                    $(".i").prop('required',true);
                    $(".s").prop('required',true);
                    document.getElementById('inter').style.display = 'block';
                    document.getElementById('bachelor').style.display = 'none';
                    document.getElementById('see').style.display = 'block';
                }
                else if(selectedLevel == '+ 2'){
                    $(".b").prop('required',false);
                    $(".i").prop('required',false);
                    $(".s").prop('required',true);
                    document.getElementById('inter').style.display = 'none';
                    document.getElementById('bachelor').style.display = 'none';
                    document.getElementById('see').style.display = 'block';
                }
                else{
                    document.getElementById('inter').style.display = 'none';
                    document.getElementById('bachelor').style.display = 'none';  
                    document.getElementById('see').style.display = 'block'; 
                }
            });
        });
	</script>
	

	<script>


$("#seeAnotherField").change(function() {
  if ($(this).val() == "account") {
    $('#otherFieldDiv').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");


$("#seeAnotherField").change(function() {
  if ($(this).val() == "hardware") {
    $('#otherFieldDiv1').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv1').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");



$("#seeAnotherField").change(function() {
  if ($(this).val() == "webapp") {
    $('#otherFieldDiv2').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv2').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");



$("#seeAnotherField").change(function() {
  if ($(this).val() == "graphics") {
    $('#otherFieldDiv3').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv3').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");





$("#seeAnotherField").change(function() {
  if ($(this).val() == "multimedia") {
    $('#otherFieldDiv3').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv3').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");






$("#seeAnotherField").change(function() {
  if ($(this).val() == "software") {
    $('#otherFieldDiv4').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv4').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");






$("#seeAnotherField").change(function() {
  if ($(this).val() == "programming") {
    $('#otherFieldDiv5').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv5').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");








$("#seeAnotherField").change(function() {
  if ($(this).val() == "webdesign") {
    $('#otherFieldDiv6').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv6').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");





	</script>

    
</body>
</html>