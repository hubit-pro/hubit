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
            <h2><strong>Gallary</strong> List</h2>
            <h2 style="float: right;"><a href="{{route('admin.gallary.create')}}" class="btn btn-primary">ADD Gallary</a></h2>
        <br><br>
        
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th >SN</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @forelse($gallaries as  $key=>$n)
                    <tr id="gallary{{$n->id}}">
                        <td>{{++$key}}</td>
                        <td>{{$n->title}}</td>
                        <td>{{$n->type}}</td>
                        <td>{!! $n->description !!}</td>
                        <td><img src="{{asset('images/uploads/'. $n->image)}}" style="height: 100px; width: 200px;"></td>
                        <td><input @if($n->status == '1') checked="checked" @endif type="checkbox" name="status" data-id="{{$n->id}}" data-status="{{$n->status}}"  class="status-switch"></td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('admin.gallary.edit', $n->slug)}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default edit"><i class="fa fa-pencil"></i></a>
                                @if(Auth::guard('admin')->user()->role == 1)
                                  <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger remove_button" url="{{route('admin.gallary.destroy', $n->id)}}"><i class="fa fa-times"></i></a>
                                @endif
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

<script type="text/javascript" src="{{asset('backend/js/plugins/switchery/switchery.js')}}"></script>

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
        var elems = Array.prototype.slice.call(document.querySelectorAll('.status-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });

        $('tbody').delegate('.status-switch', 'change', function(){
             var newsId  = $(this).data('id');
             var status = $(this).data('status');

                if(status == 1)
                 {
                     var chk = '0';
                 }else{
                    var chk = '1';
                } 
            $.post('{{route('admin.change.gallary.status')}}',{'_token':'{{csrf_token()}}',news_id:newsId, status:chk}, function(){

                toastr.success('status changed successfully');
            });
        });

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


