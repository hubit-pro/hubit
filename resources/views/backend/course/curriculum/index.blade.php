@extends('backend.common.layout.app')
@push('styles')
    <style type="text/css">
        #category_error {
            color: red;
        }
    </style>
@endpush
@section('content')

<div id="page-content">
    <div class="block full">
        <div class="block-title">
            <h2><strong>Curriculum</strong> List</h2>
            <h2 style="float: right;"><a href="{{route('admin.curriculum.create')}}" class="btn btn-primary">ADD Curriculum</a></h2>
        <br><br>
        
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th >SN</th>
                        <th>course</th>
                        <th>Curriculum</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @forelse($curriculums as  $key=>$curriculum)
                    <tr id="curriculum{{$curriculum->id}}">
                        <td>{{++$key}}</td>
                        <td>@if($curriculum->course){{$curriculum->course->title}}@endif</td>
                        <td>{{$curriculum->title}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('admin.curriculum.edit', $curriculum->slug)}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default edit"><i class="fa fa-pencil"></i></a>
                                  <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger remove_button" url="{{route('admin.curriculum.destroy', $curriculum->id)}}"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
</div>

@push('scripts')

{{-- for datatable --}}
   <script type="text/javascript">
     $(document).ready(function(){
              $('#example').DataTable({
                  responsive: true,
                  dom: '<"html5buttons"B>lTfgitp',
                  buttons: [
                       {
                      
                       customize: function (win){
                              $(win.document.body).addClass('white-bg');
                              $(win.document.body).css('font-size', '10px');

                              $(win.document.body).find('table')
                                      .addClass('compact')
                                      .css('font-size', 'inherit');
                      }
                      }
                  ]

              });

          });
   </script>
{{-- for change status switchery --}}
   <script>
    

          {{-- for delete --}}
        $('.remove_button').on('click', function(e) {
            e.preventDefault();
            var url = $(this).attr('url');
            swal({
                    title: "Are you sure!",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                },
                function() {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token : "{{csrf_token()}}"
                        },
                        success: function(data){
                            $(data).remove();
                            toastr.success('Deleted Successfully');
                        },
                        error: function(error){
                            console.log('error');
                        }
                    })
                });
        }); 
    </script>

 @endpush


@endsection


