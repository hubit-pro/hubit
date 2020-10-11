@extends('backend.common.layout.app')
{{-- @section('title', 'Job Category') --}}
@push('styles')
   
@endpush
@section('content')
<div class="block">
    <!-- Form Validation Example Title -->
    <div class="block-title">
        <h2><strong>Student</strong> Edit</h2>
    </div>
    <form id="form-validation" action="{{route('admin.student.update',$student->slug)}}" method="post" class="form-horizontal form-bordered" enctype='multipart/form-data'>
        @csrf
        {{method_field('PUT')}}
        @include('backend.student.common')
    </form>
  
</div>

@push('scripts')    

 @endpush


@endsection