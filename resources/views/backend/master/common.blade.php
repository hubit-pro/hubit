<fieldset>
     <div class="form-group">
        <label class="col-md-2 control-label" >Type </label>
        <div class="col-md-6">
            <select name="type" class="form-control">
                <option value="">Select Type</option>
                <option value="1" @if(isset($master) && ($master->type == 1)) selected @endif>Aboutus(Main)</option>
                <option value="2" @if(isset($master) && ($master->type == 2)) selected @endif>Aboutus</option>
                <option value="3" @if(isset($master) && ($master->type == 3)) selected @endif>Target(Mission)</option>
                <option value="4" @if(isset($master) && ($master->type == 4)) selected @endif>CertificateOrAward</option>
                <option value="5" @if(isset($master) && ($master->type == 5)) selected @endif>Vacancy</option>
                <option value="6" @if(isset($master) && ($master->type == 6)) selected @endif>Service</option>
                <option value="7" @if(isset($master) && ($master->type == 7)) selected @endif>Blog</option>
            </select>
             @if($errors->has('type')) <p style="color: red;">{{ $errors->first('type')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Title</label>
        <div class="col-md-6">
            <input type="text" name="title" class="form-control" value="@if(isset($master)){{$master->title}}@else{{old('title')}}@endif" placeholder="title">
            @if($errors->has('title')) <p style="color: red;">{{ $errors->first('title')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Description </label>
        <div class="col-md-6">
            <textarea class="form-control ckeditor" placeholder="Content here" name="description" id="editor1" >@if(isset($master)) {!! $master->description !!} @else{{old('description')}}@endif</textarea>

            @if($errors->has('description')) <p style="color: red;">{{ $errors->first('description')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Image</label>
        <div class="col-md-6">
            <input type="file" name="image" class="form-control">
             @if(isset($master))
                <img src="{{asset('images/uploads/'. $master->image)}}" style="max-width: 200px; max-height: 200px;">  
            @endif
            @if($errors->has('image')) <p style="color: red;">{{ $errors->first('image')}}</p> @endif
        </div>
    </div>
</fieldset>
<div class="form-group form-actions">
    <div class="col-md-6 col-md-offset-2">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
        <a href="{{route('admin.master.index')}}" class="btn btn-sm btn-info">Back</a>
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