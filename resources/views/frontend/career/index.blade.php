@extends('frontend.common.layout.app')
@section('title', 'Career')
@push('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/home/career.css')}}">
@endpush
@section('content')

<section class="container-fluid  non" style="position: relative;">

  <img src="{{asset('img/career-banner.png')}}">
<!-------------------------VACANCY AREA START--------------------->
<section class="container-fluid p-5">
  <div class="row">

    <div class="col-xl-4">
      
      <div class=" contact-form">
      <div class="vacancy">
        <img src="{{asset('img/vac3.jpg')}}"> 
        
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
      	@if(isset($vacancies))
      	@foreach($vacancies as $vacancy)
        <div class="career container">
		    <div class="internship">
		      <h2>{{ $vacancy->title }}</h2>
		      {!! $vacancy->description !!}
		    </div>
		    <hr style="width: 100%;">
		</div>
		@endforeach
		@endif


       
        <div class="col-xl-12 p-4 text-center">
          <p><strong>SUCCESS</strong> is no accident .<br> It is <strong>HARD WORK ,<br> PERSEVERANCE ,<br> LEARNING , STUDYING ,<br> SACRIFICE</strong><br> and most of all , <br><strong>LOVE</strong><br> of what you are doing or learning to do .<br><br><strong>Author - Pele</strong></p>
        </div>

      </div>
    </div>

  </div>
</section>
<!-------------------------VACANCY AREA END----------------------->

@endsection