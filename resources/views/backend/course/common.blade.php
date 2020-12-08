<fieldset>
    <div class="form-group">
        <label class="col-md-2 control-label" >Category <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <select class="form-control" name="course_category_id">
                <option value="">Seclect course Category</option>
                @forelse($courseCategories as $category)
                    <option value="{{$category->id}}" {{ (isset($course) && $course->course_category_id==$category->id)?'selected': old('course_category_id') }}>{{$category->title}}</option>
                @empty
                @endforelse
            </select>
             @if($errors->has('course_category_id')) <p style="color: red;">{{ $errors->first('course_category_id')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Course Title<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" name="title" class="form-control" value="@if(isset($course)){{$course->title}}@else{{old('title')}}@endif" placeholder="course name">
            @if($errors->has('title')) <p style="color: red;">{{ $errors->first('title')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Lecturer<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" name="lecturer" class="form-control" value="@if(isset($course)){{$course->lecturer}}@else{{old('lecturer')}}@endif" placeholder="Lecturer name">
            @if($errors->has('lecturer')) <p style="color: red;">{{ $errors->first('lecturer')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >No. Of Student<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="number" name="noOfStudent" class="form-control" value="@if(isset($course)){{$course->noOfStudent}}@else{{old('noOfStudent')}}@endif" placeholder="Number of student" min="0s">
            @if($errors->has('noOfStudent')) <p style="color: red;">{{ $errors->first('noOfStudent')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Rating</label>
        <div class="col-md-6">
            <input type="number" name="rating" class="form-control" value="@if(isset($course)){{$course->rating}}@else{{old('rating')}}@endif" placeholder="Rating" min="0" max="5">
            @if($errors->has('rating')) <p style="color: red;">{{ $errors->first('rating')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Strike Fee</label>
        <div class="col-md-6">
            <input type="text" name="strikFee" class="form-control" value="@if(isset($course)){{$course->strikFee}}@else{{old('strikFee')}}@endif" placeholder="strike fee (like before discount)">
            @if($errors->has('strikFee')) <p style="color: red;">{{ $errors->first('strikFee')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Fee</label>
        <div class="col-md-6">
            <input type="text" name="fee" class="form-control" value="@if(isset($course)){{$course->fee}}@else{{old('fee')}}@endif" placeholder="Fee">
            @if($errors->has('fee')) <p style="color: red;">{{ $errors->first('fee')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Description <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <textarea class="form-control ckeditor" placeholder="Content here" name="description" id="editor1" >@if(isset($course)) {!! $course->description !!} @else{{old('description')}}@endif</textarea>

            @if($errors->has('description')) <p style="color: red;">{{ $errors->first('description')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Image<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="file" name="image" class="form-control">
            @if(isset($course))
                <img src="{{asset('images/uploads/'. $course->image)}}" style="max-width: 200px; max-height: 200px;">   
            @endif
            @if($errors->has('image')) <p style="color: red;">{{ $errors->first('image')}}</p> @endif
        </div>
    </div>
</fieldset>
<div class="form-group form-actions">
    <div class="col-md-6 col-md-offset-2">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
        <a href="{{route('admin.course.index')}}" class="btn btn-sm btn-info">Back</a>
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