<fieldset>
    <div class="form-group">
        <label class="col-md-2 control-label" >Full Name</label>
        <div class="col-md-6">
            <input type="text" name="fullName" class="form-control" value="@if(isset($student)){{$student->fullName}}@else{{old('fullName')}}@endif" placeholder="full name">
            @if($errors->has('fullName')) <p style="color: red;">{{ $errors->first('fullName')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >User Name</label>
        <div class="col-md-6">
            <input type="text" name="userName" class="form-control" value="@if(isset($student)){{$student->userName}}@else{{old('userName')}}@endif" placeholder="username">
            @if($errors->has('userName')) <p style="color: red;">{{ $errors->first('userName')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Email</label>
        <div class="col-md-6">
            <input type="email" name="email" class="form-control" value="@if(isset($student)){{$student->email}}@else{{old('email')}}@endif" placeholder="email">
            @if($errors->has('email')) <p style="color: red;">{{ $errors->first('email')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Pasword</label>
        <div class="col-md-6">
            <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="pasword">
            @if($errors->has('password')) <p style="color: red;">{{ $errors->first('password')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Confirm Pasword</label>
        <div class="col-md-6">
            <input type="password" name="confirm_password" class="form-control" value="{{old('confirm_password')}}" placeholder="confirm pasword">
            @if($errors->has('confirm_password')) <p style="color: red;">{{ $errors->first('confirm_password')}}</p> @endif
        </div>
    </div>
</fieldset>
<div class="form-group form-actions">
    <div class="col-md-6 col-md-offset-2">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
        <a href="{{route('admin.student.index')}}" class="btn btn-sm btn-info">Back</a>
    </div>
</div>
@push('scripts')
<script type="text/javascript" src="{{asset('backend/js/plugins/ckeditor/ckeditor.js')}}"></script>
      
{{-- <script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('admin.image.store', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script> --}}
@endpush