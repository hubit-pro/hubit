<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('includes/homehead')
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/ticket-support.css">


    
    <title>Ticket-support</title>
</head>
<body >
@include('includes/navhome')  
<h1>TICKET-SUPPORT</h1>


<div class="container-fluid">

<img  src='img/tivket-support.png'>
</div>
<section class="container mt-5" id="border">  
  

<div class="row mb-5">
  
    <div class="col-md-7 pr-5">
<h3>CREATE NEW TICKET</h3>


<form>
  <div class="form-row">
    <div class="form-group col-md-6">
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
    <label for="inputAddress2">Courses</label>
    <input type="text" class="no-border" id="inputAddress2" placeholder="">
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
  
  <div class="form-group" id="otherFieldDiv">
    <label for="otherField">Hardware Problems</label>
    <select class="no-border" id="otherField">
      <option>Yay</option>
      <option>Woo</option>
      <option>Hazah</option>
      <option>Yipee</option>
      <option>Hoorah</option>
    </select>
  </div>

  
  <div class="form-group" id="otherFieldDiv1">
    <label for="otherField">software Problems</label>
    <select class="no-border" id="otherField">
      <option>Yay</option>
      <option>Woo</option>
      <option>Hazah</option>
      <option>Yipee</option>
      <option>Hoorah</option>
    </select>
  </div>

  
  
  <div class="form-group" id="otherFieldDiv2">
    <label for="otherField">Networking Problems</label>
    <select class="no-border" id="otherField">
      <option>Yay</option>
      <option>Woo</option>
      <option>Hazah</option>
      <option>Yipee</option>
      <option>Hoorah</option>
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

          
          

              
              <div class="row"> 
        <div class="g-recaptcha" data-sitekey="6LdL05sUAAAAAB88a6SNpUGFczJMY7iS8Xr_Y32g" style="margin-left: 25%;"></div>
        <div class="col-xl-12 text-center">
          <div class="form-group">
              <input type="submit" name="submit" class="btnContact mt-3" value="SUBMIT FORM" />
          </div>
          </div>                  
        </div>
            </div>

            <div class="col-md-5">
        <h1 style="text-align:center;">solution</h1>

      </div>

      

    

    </div>

    



</section>

</form>

















<script>



$("#seeAnotherField").change(function() {
  if ($(this).val() == "yes") {
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
  if ($(this).val() == "true") {
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
  if ($(this).val() == "y") {
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



// $("#seeAnotherFieldGroup").change(function() {
//   if ($(this).val() == "yes") {
//     $('#otherFieldGroupDiv').show();
//     $('#otherField1').attr('required', '');
//     $('#otherField1').attr('data-error', 'This field is required.');
//     $('#otherField2').attr('required', '');
//     $('#otherField2').attr('data-error', 'This field is required.');
//   } else {
//     $('#otherFieldGroupDiv').hide();
//     $('#otherField1').removeAttr('required');
//     $('#otherField1').removeAttr('data-error');
//     $('#otherField2').removeAttr('required');
//     $('#otherField2').removeAttr('data-error');
//   }
// });
// $("#seeAnotherFieldGroup").trigger("change");















</script>




@include('includes/footer')


    
</body>
</html>