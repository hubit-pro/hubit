<!DOCTYPE html>
<html>
<head>
	@include('includes/homehead')
  <title>Career</title>
  <link rel="stylesheet" type="text/css" href="css/home/career.css">


</head>
<body>
   
<!-----------------------NAVBAR------------------------------->
	@include('includes/navhome')

  
<!-------------------------NAVBAR END--------------------------------->


<!--------------------------NON-SLIDER----------------------->
<section class="container-fluid  non" style="position: relative;">

  <img src="img/career-banner.png">


<!-------------------------TEXT CONTAINER-------------------->
  
<!-------------------------TEXT CONTAINER END---------------->



<!-------------------------VACANCY AREA START--------------------->
<section class="container-fluid p-5">
  <div class="row">

    <div class="col-xl-4">
      
      <div class=" contact-form">
      <div class="vacancy">
        <img src="img/vac3.jpg"> 
        
        </div>
        <form method="post">
          <h3> BIO-DATA FORM</h3>

          <div class="row">
            <div class="col-xl-12">
            <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Ad ID(Enter Ad ID from above Ad)" />
                </div>

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

                <div class="form-group ">
                  <select type="text" name="txtField" class="form-control" required="">
                    <option value="">Field</option>
                    <option value="">IT</option>
                    <option value="">Management</option>
                  </select>
                </div>
                

 <div style="position:relative;">
		<a class='btn btn-primary' href='javascript:;'>
			Choose File...
			<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
		</a>
		&nbsp;
		<span class='label label-info' id="upload-file-info"></span>
	</div>

                <div class="form-group mt-3">
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

    <div class="col-xl-8">
      <div class="row vac">

        
        <div class="career container">
    <div class="internship">
      <h2>Job/Internship Programme </h2>
      <h4>(For the students  who enroll in one of our job  intensive training course.)</h4>
      <p>We provide a job placement with our partners (Other organization who are willing to enroll students)
        .We believe that studying and working platform are totally different .To let students 
        experience that difference in platform we offer them internship programme .Joining a company as 
        an intern gives you the opportunity to work hands on in a professional environment .
        As an intern you're not just there to get coffee or run errands but you're there to gain actual
         work experience .Internships are a way to test drive possible jobs and explore different career 
         options .Without a solid resume it can be tougher to be considered for a position .Internships are 
         key to building experience as a student or recent graduate .As an intern you'll become a master of 
         time management. When you're working in a fast paced professional environment you need to know every
          minute counts.Internships provide you with the building blocks you need for your future.
          Below listed are the criterias to apply for the internship.</p>
      <h5>Criteria we place in an intern/job...</h5>
        <ul>
          <li>Good knowledge of applying field</li>
          <li>Disciplined</li>
          <li>Hardworking</li>
          <li>Positive attitude</li>
          <li>Punctual</li>
          <li>Compulsory attend the training(Extra professional training provided)</li>
        </ul>
    </div>
    
    <hr style="width: 100%;">
    
    
</div>
        <div class="job">
        <h2>Job/intern on HUB IT</h2>
        <h4>(This is for those people who contact our office directly or from any other social medium
           for any job/intern vacancies.)</h4>
        <p>We not only provide internship also we are looking for the best candidate to grow together 
          . We frequently hire people who are looking for career growth and are willing to learn technical skills on our On-Job-Training  programme. We also hire part-timers as well (specially working students). Candidate with no technical knowledge or skill also can contact our office for job oppurtunities. </p>
        <h5>Criteria we seek in an candidate...</h5>
          <ul>
            <li>Disciplined</li>
            <li>Hardworking</li>
            <li>Positive attitude</li>
            <li>Punctual</li>
            <li>Academic: Depend on the position you are applying</li>
            <li>Motorcycle License</li>
          </ul>
          <h5>If you are eligible on our criterias you can join us by just filling the bio-data form
            our HR will set a call for you further
          </h5>
    <hr>

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