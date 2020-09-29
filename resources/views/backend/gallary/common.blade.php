<fieldset>
    <div class="form-group">
        <label class="col-md-2 control-label" >Category <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <select class="form-control" name="gallary_category_id">
                <option value="">Seclect Gallary Category</option>
                @forelse($gallaryCategories as $category)
                    <option value="{{$category->id}}" {{ (isset($gallary) && $gallary->gallary_category_id==$category->id)?'selected': old('gallary_category_id') }}>{{$category->title}}</option>
                @empty
                @endforelse
            </select>
             @if($errors->has('gallary_category_id')) <p style="color: red;">{{ $errors->first('gallary_category_id')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Sub Category <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <select class="form-control" name="gallary_sub_category_id">
                <option value="">Seclect Gallary Sub Category</option>
                 <option value="@if(isset($gallary)) {{$gallary->gallary_sub_category_id}}  @endif" {{ (isset($gallary) && $gallary->gallary_sub_category_id)?'selected': old('gallary_sub_category_id') }}>@if(isset($gallary)) @if($gallary->gallary_sub_category_id) {{$gallary->subCategory->title}} @endif @endif</option> 
            </select>
             @if($errors->has('property_sub_category_id')) <p style="color: red;">{{ $errors->first('property_sub_category_id')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Name<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" name="name" class="form-control" value="@if(isset($gallary)){{$gallary->name}}@else{{old('name')}}@endif" placeholder="name">
            @if($errors->has('name')) <p style="color: red;">{{ $errors->first('name')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Email<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="email" name="email" class="form-control" value="@if(isset($gallary)){{$gallary->email}}@else{{old('email')}}@endif" placeholder="email">
            @if($errors->has('email')) <p style="color: red;">{{ $errors->first('email')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Phone<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="number" name="phoneNumber" class="form-control" value="@if(isset($gallary)){{$gallary->phoneNumber}}@else{{old('phoneNumber')}}@endif" placeholder="phone number">
            @if($errors->has('phoneNumber')) <p style="color: red;">{{ $errors->first('phoneNumber')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Company name<span class="text-danger"></span></label>
        <div class="col-md-6">
            <input type="text" name="companyName" class="form-control" value="@if(isset($gallary)){{$gallary->companyName}}@else{{old('companyName')}}@endif" placeholder="company name">
            @if($errors->has('companyName')) <p style="color: red;">{{ $errors->first('companyName')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Location<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" name="location" class="form-control" value="@if(isset($gallary)){{$gallary->location}}@else{{old('location')}}@endif" placeholder="location">
            @if($errors->has('location')) <p style="color: red;">{{ $errors->first('location')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Client speech </label>
        <div class="col-md-6">
            <textarea class="form-control ckeditor" placeholder="Content here" name="clientSpeech" id="editor1" >@if(isset($gallary)) {!! $gallary->clientSpeech !!} @else{{old('clientSpeech')}}@endif</textarea>

            @if($errors->has('clientSpeech')) <p style="color: red;">{{ $errors->first('clientSpeech')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Description </label>
        <div class="col-md-6">
            <textarea class="form-control ckeditor" placeholder="Content here" name="description" id="editor1" >@if(isset($gallary)) {!! $gallary->description !!} @else{{old('description')}}@endif</textarea>

            @if($errors->has('description')) <p style="color: red;">{{ $errors->first('description')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Image</label>
        <div class="col-md-6">
            <input type="file" name="image" class="form-control">
             @if(isset($gallary))
                <img src="{{asset('images/uploads/'. $gallary->image)}}" style="max-width: 200px; max-height: 200px;">  
            @endif
            @if($errors->has('image')) <p style="color: red;">{{ $errors->first('image')}}</p> @endif
        </div>
    </div>
</fieldset>
<div class="form-group form-actions">
    <div class="col-md-6 col-md-offset-2">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
        <a href="{{route('admin.gallary.index')}}" class="btn btn-sm btn-info">Back</a>
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

<script type="text/javascript">
    $("select[name='gallary_category_id']").change(function() {
        var categoryId = $(this).val();
        $("select[name='gallary_sub_category_id']").children('option:not(:first)').remove();
        $.ajax({
            url: "{{route('admin.gallary.sub.category')}}",
            type: "POST",
            data: {
                _token : "{{csrf_token()}}",
                category_id : categoryId
            },
            success: function(data){
                $("select[name='gallary_sub_category_id']").empty();
                $("select[name='gallary_sub_category_id']").html("<option value=''>Selelct Gallary Sub Category</option>");
                for(i = 0; i < data.length; i ++) {
                    $("select[name='gallary_sub_category_id']").append("<option value='"+data[i]["id"]+"'>"+data[i]["title"]+"</option>");
                }
            },
            error: function(error){
                console.log('error');
            }
        });
    });

</script>
@endpush