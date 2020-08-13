<!DOCTYPE html>
<html>
<head>
	@include('includes/homehead')
  <title>Career</title>
  <link rel="stylesheet" type="text/css" href="css/career.css">


</head>
<body>
   
<!-----------------------NAVBAR------------------------------->
	@include('includes/navhome')

  
<!-------------------------NAVBAR END--------------------------------->


<!--------------------------NON-SLIDER----------------------->
<section class="container-fluid p-0 m-0 non" style="position: relative;">

  <img src="img/sol.jpg">


<!-------------------------TEXT CONTAINER-------------------->
  <section class="container-fluid" id="topper"><!--this id "topper" is the transparent box over the slider--->

    
    

    <div class="row">
      <div class="col-xl-12 text-center">
        <h2>Career</h2>
      </div>
    </div>

  </section>

</section>
<!-------------------------TEXT CONTAINER END---------------->



<!-------------------------VACANCY AREA START--------------------->
<section class="container-fluid p-5">
  <div class="row">

    <div class="col-xl-8">
      <div class="container contact-form">
            
        <form method="post">
          <h3> BIO-DATA FORM</h3>

          <div class="row">
            <div class="col-xl-12">

                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" required="" />
                </div>

                <div class="form-group">
                    <input type="email" name="txtEmail" class="form-control" placeholder="Your Email *" required=""/>
                </div>

                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" required="" />
                </div>

                <div class="form-group">
                    <input type="text" name="txtNation" class="form-control" placeholder="Your Nationality *" required="" />
                </div>

                <div class="form-group">
                    <input type="text" name="txtAddress" class="form-control" placeholder="Your Current Address *" required=""/>
                </div>

                <div class="form-group">
                  <select type="text" name="txtQuali" class="form-control" required="">
                    <option value="">Education Qualification</option>
                    <option value="">Diploma</option>
                    <option value="">+2</option>
                    <option value="">Bachelors</option>
                    <option value="">Masters</option>
                  </select>
                </div>

                <div class="form-group">
                  <select type="text" name="txtField" class="form-control" required="">
                    <option value="">Field</option>
                    <option value="">IT</option>
                    <option value="">Management</option>
                  </select>
                </div>

                <div class="form-group">
                    <input type="text" name="txtExp" class="form-control" placeholder="Your Work Experience *" required="" />
                </div>

                <div class="form-group">
                    <input type="text" name="txtExpect" class="form-control" placeholder="Salary Expectation *" required="" />
                </div>

                <div class="form-group" required="">
                    <input type="radio" name="gender" value="" required=""> Male
                    <input type="radio" name="gender" value="" required=""> Female
                    <input type="radio" name="gender" value="" required=""> Other 
                </div>

                <div class="form-group">
                    <textarea name="txtMessage" class="form-control" placeholder="Convince us why to choose you *" required="" >

                    </textarea>
                </div>

              </div>
          </div><br><br>

            <div class="row">                 
              <div class="form-group">
                <input type="submit" name="btnSubmit" class="btnContact" value="SUBMIT FORM" />
              </div>                  
            </div>

        </form>
      </div>
    </div>

    <div class="col-xl-4">
      <div class="row vac">

        <div class="col-xl-12">
          <img src="img/vac3.jpg">
        </div>

        <div class="col-xl-12 p-5 text-center" style="border-bottom: 1px solid #a0047d;">
          <p>काम इच्छाबाट होइन परिश्रमबाट सिद्ध हुन्छ, सुतिरहेको अन्वेषणको मोहनी हो ।<br> यद्यपि त्यहाँ पुग्न कठिनाइ र अनेक पहाड चढनुपर्छ ।<br><br><strong> नेपाली महाकवि लक्ष्मीप्रसाद देवकोटा</strong></p>
        </div>

        <div class="col-xl-12 p-4 text-center">
          <p><strong>SUCCESS</strong> is no accident .<br> It is <strong>HARD WORK ,<br> PERSEVERANCE ,<br> LEARNING , STUDYING ,<br> SACRIFICE</strong><br> and most of all , <br><strong>LOVE</strong><br> of what you are doing or learning to do .<br><br><strong>Author - Pele</strong></p>
        </div>

      </div>
    </div>

  </div>
</section>
<!-------------------------VACANCY AREA END----------------------->


<!----------------------FOOTER------------------------------->
@include('includes/footer')

  </footer>
  <!-- Footer -->




<script src="js/miss.js"></script>

</body>
</html>