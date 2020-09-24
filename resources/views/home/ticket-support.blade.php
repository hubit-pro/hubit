<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('includes/homehead')
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/home/ticket-support.css">
<style>
#login .container #login-row #login-column #login-box {
  margin-top: 100px;
  max-width: 600px;
  height: 500px;
  background-color: #EAEAEA;
}
#login h3{
  color:#ff9800 !important ;
  
}

</style>

    
    <title>Ticket-support</title>
</head>
<body>
@include('includes/navhome')  



<div class="container-fluid ">

<img  src='img/supportbanner.jpg' class="ticket-banner">
</div>
<section class="container-fluid mt-5 " id="border">  
  
<div class="row mb-5">
  
    <div class="col-md-5  ">
      <p> If you are new to our services please, Fill the Form Below For Support</p>
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
        <div class="col-xl-12 text-center">
          <div class="form-group">
              <input type="submit" name="submit" class="btnContact mt-3" value="SUBMIT FORM" />
          </div>
          </div>                  
        </div>
            </div>

            <div class="col-md-5 solution-div">
            <div id="login">
      <p> If you are Regular customer of our store  please , log in for support</p>
       
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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