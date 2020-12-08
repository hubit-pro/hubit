<fieldset>
    <div class="form-group">
        <label class="col-md-2 control-label" >Course</label>
        <div class="col-md-6">
            <select class="form-control" name="course_id">
                <option value="">Seclect course</option>
                @forelse($courses as $course)
                    <option value="{{$course->id}}" {{ (isset($curriculum) && $curriculum->course_id==$course->id)?'selected': old('course_id') }}>{{$course->title}}</option>
                @empty
                @endforelse
            </select>
             @if($errors->has('course_id')) <p style="color: red;">{{ $errors->first('course_id')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >parent</label>
        <div class="col-md-6">
            <select class="form-control" name="course_type">
                <option value="">select parent course</option>
                @forelse($curriculums1 as $curriculum1)
                    <option value="{{$curriculum1->id}}" {{ (isset($curriculum) && $curriculum->course_type)?'selected': old('course_type') }}>{{$curriculum1->title}}</option>
                @empty
                @endforelse
            </select>
             @if($errors->has('course_id')) <p style="color: red;">{{ $errors->first('course_id')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Title<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" name="title" class="form-control" value="@if(isset($curriculum)){{$curriculum->title}}@else{{old('title')}}@endif" placeholder="curriculum title">
            @if($errors->has('title')) <p style="color: red;">{{ $errors->first('title')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Description <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <textarea class="form-control ckeditor" placeholder="Content here" name="description" id="editor1" >@if(isset($curriculum)) {!! $curriculum->description !!} @else{{old('description')}}@endif</textarea>

            @if($errors->has('description')) <p style="color: red;">{{ $errors->first('description')}}</p> @endif
        </div>
    </div>
</fieldset>
<div class="form-group form-actions">
    <div class="col-md-6 col-md-offset-2">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
        <a href="{{route('admin.curriculum.index')}}" class="btn btn-sm btn-info">Back</a>
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