<fieldset>
    <div class="form-group">
        <label class="col-md-2 control-label" >Category <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <select class="form-control" name="product_category_id">
                <option value="">Seclect product Category</option>
                @forelse($productCategories as $category)
                    <option value="{{$category->id}}" {{ (isset($product) && $product->product_category_id==$category->id)?'selected': old('product_category_id') }}>{{$category->title}}</option>
                @empty
                @endforelse
            </select>
             @if($errors->has('product_category_id')) <p style="color: red;">{{ $errors->first('product_category_id')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >product Name<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" name="title" class="form-control" value="@if(isset($product)){{$product->title}}@else{{old('title')}}@endif" placeholder="product name">
            @if($errors->has('title')) <p style="color: red;">{{ $errors->first('title')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Description <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <textarea class="form-control ckeditor" placeholder="Content here" name="description" id="editor1" >@if(isset($product)) {!! $product->description !!} @else{{old('description')}}@endif</textarea>

            @if($errors->has('description')) <p style="color: red;">{{ $errors->first('description')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Image<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="file" name="image[]" class="form-control" multiple="">
              @if(isset($product))
                @forelse($product->images as $img)
                    @if(isset($img->image))
                        <img src="{{asset('images/uploads/'. $img->image)}}" style="max-width: 200px; max-height: 200px;">
                    @endif
                @empty
                @endforelse
            @endif
            @if($errors->has('image')) <p style="color: red;">{{ $errors->first('image')}}</p> @endif
        </div>
    </div>
</fieldset>
<div class="form-group form-actions">
    <div class="col-md-6 col-md-offset-2">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
        <a href="{{route('admin.product.index')}}" class="btn btn-sm btn-info">Back</a>
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