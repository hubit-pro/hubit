<fieldset>
    <div class="form-group">
        <label class="col-md-2 control-label" >Company Name<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" name="companyName" class="form-control" value="@if(isset($contactus)){{$contactus->companyName}}@else{{old('companyName')}}@endif" placeholder="company name">
            @if($errors->has('companyName')) <p style="color: red;">{{ $errors->first('companyName')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Location<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" name="location" class="form-control" value="@if(isset($contactus)){{$contactus->location}}@else{{old('location')}}@endif" placeholder="location">
            @if($errors->has('location')) <p style="color: red;">{{ $errors->first('location')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Mail Address<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" name="mailAddress" class="form-control" value="@if(isset($contactus)){{$contactus->mailAddress}}@else{{old('mailAddress')}}@endif" placeholder="mailAddress">
            @if($errors->has('mailAddress')) <p style="color: red;">{{ $errors->first('mailAddress')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Optional Mail Address</label>
        <div class="col-md-6">
            <input type="text" name="optionalMailAddress" class="form-control" value="@if(isset($contactus)){{$contactus->optionalMailAddress}}@else{{old('optionalMailAddress')}}@endif" placeholder="optionalMailAddress">
            @if($errors->has('optionalMailAddress')) <p style="color: red;">{{ $errors->first('optionalMailAddress')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Office Phone<span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" name="officePhone" class="form-control" value="@if(isset($contactus)){{$contactus->officePhone}}@else{{old('officePhone')}}@endif" placeholder="officePhone">
            @if($errors->has('officePhone')) <p style="color: red;">{{ $errors->first('officePhone')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Sales Phone</label>
        <div class="col-md-6">
            <input type="text" name="salePhone" class="form-control" value="@if(isset($contactus)){{$contactus->salePhone}}@else{{old('salePhone')}}@endif" placeholder="salePhone">
            @if($errors->has('salePhone')) <p style="color: red;">{{ $errors->first('salePhone')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Social Phone</label>
        <div class="col-md-6">
            <input type="text" name="socialPhone" class="form-control" value="@if(isset($contactus)){{$contactus->socialPhone}}@else{{old('socialPhone')}}@endif" placeholder="socialPhone">
            @if($errors->has('socialPhone')) <p style="color: red;">{{ $errors->first('socialPhone')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Support Software Phone</label>
        <div class="col-md-6">
            <input type="text" name="supportSoftwarePhone" class="form-control" value="@if(isset($contactus)){{$contactus->supportSoftwarePhone}}@else{{old('supportSoftwarePhone')}}@endif" placeholder="supportSoftwarePhone">
            @if($errors->has('supportSoftwarePhone')) <p style="color: red;">{{ $errors->first('supportSoftwarePhone')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Support Hardware Phone</label>
        <div class="col-md-6">
            <input type="text" name="supportHardwarePhone" class="form-control" value="@if(isset($contactus)){{$contactus->supportHardwarePhone}}@else{{old('supportHardwarePhone')}}@endif" placeholder="supportHardwarePhone">
            @if($errors->has('supportHardwarePhone')) <p style="color: red;">{{ $errors->first('supportHardwarePhone')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >IT Training Phone</label>
        <div class="col-md-6">
            <input type="text" name="itTrainingPhone" class="form-control" value="@if(isset($contactus)){{$contactus->itTrainingPhone}}@else{{old('itTrainingPhone')}}@endif" placeholder="itTrainingPhone">
            @if($errors->has('itTrainingPhone')) <p style="color: red;">{{ $errors->first('itTrainingPhone')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Facebook Url</label>
        <div class="col-md-6">
            <input type="text" name="facebookUrl" class="form-control" value="@if(isset($contactus)){{$contactus->facebookUrl}}@else{{old('facebookUrl')}}@endif" placeholder="facebookUrl">
            @if($errors->has('facebookUrl')) <p style="color: red;">{{ $errors->first('facebookUrl')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >LinkedIn Url</label>
        <div class="col-md-6">
            <input type="text" name="linkedinUrl" class="form-control" value="@if(isset($contactus)){{$contactus->linkedinUrl}}@else{{old('linkedinUrl')}}@endif" placeholder="linkedinUrl">
            @if($errors->has('linkedinUrl')) <p style="color: red;">{{ $errors->first('linkedinUrl')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Yutube Url</label>
        <div class="col-md-6">
            <input type="text" name="youtubeUrl" class="form-control" value="@if(isset($contactus)){{$contactus->youtubeUrl}}@else{{old('youtubeUrl')}}@endif" placeholder="youtubeUrl">
            @if($errors->has('youtubeUrl')) <p style="color: red;">{{ $errors->first('youtubeUrl')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Instagram Url</label>
        <div class="col-md-6">
            <input type="text" name="instagramUrl" class="form-control" value="@if(isset($contactus)){{$contactus->instagramUrl}}@else{{old('instagramUrl')}}@endif" placeholder="instagramUrl">
            @if($errors->has('instagramUrl')) <p style="color: red;">{{ $errors->first('instagramUrl')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Twitter Url</label>
        <div class="col-md-6">
            <input type="text" name="twitterUrl" class="form-control" value="@if(isset($contactus)){{$contactus->twitterUrl}}@else{{old('twitterUrl')}}@endif" placeholder="twitterUrl">
            @if($errors->has('twitterUrl')) <p style="color: red;">{{ $errors->first('twitterUrl')}}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" >Map Url </label>
        <div class="col-md-6">
            <textarea class="form-control" placeholder="map url" name="map" >@if(isset($contactus)) {!! $contactus->map !!} @else{{old('map')}}@endif</textarea>
            @if($errors->has('map')) <p style="color: red;">{{ $errors->first('map')}}</p> @endif
            @if(isset($contactus) && $contactus->map)
                <iframe src="{{$contactus->map}}" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            @endif
        </div>
        
    </div>

</fieldset>
<div class="form-group form-actions">
    <div class="col-md-6 col-md-offset-2">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
        <a href="{{route('admin.contactus.index')}}" class="btn btn-sm btn-info">Back</a>
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