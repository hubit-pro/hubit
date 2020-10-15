@extends('backend.common.layout.app')
{{-- @section('title', 'Job Category') --}}
@push('styles')
    <style type="text/css">
        #category_error {
            color: red;
        }
    </style>
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
    <link href="{{asset('css/plugins/switchery/switchery.css')}}" rel="stylesheet"> --}}
@endpush
@section('content')

<div id="page-content">
    <div class="block full">
        <div class="block-title">
            <h2><strong>Gallary</strong> Category</h2>
            <h2 style="float: right;"><button class="btn btn-primary" onclick="$('#show_modal').modal('show');">ADD</button></h2>
        <br><br>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th >SN</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @forelse($categories as  $key=>$category)
                    <tr id="gallaryCategory{{$category->id}}">
                        <td>{{++$key}}</td>
                        <td>{{$category->title}}</td>
                        <td><input @if($category->status == '1') checked="checked" @endif type="checkbox" name="status" data-id="{{$category->id}}" data-status="{{$category->status}}"  class="status-switch"></td>
                        <td>
                            <div class="btn-group">
                                <a href="javascript:void(0)" url="{{route('admin.gallary_category.edit', $category->id)}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default edit" data-category="{{$category}}"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger remove_button" url="{{route('admin.gallary_category.destroy', $category->id)}}"><i class="fa fa-times"></i></a>
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
{{-- modal start --}}
<div id="show_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('admin.gallary_category.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;"  id="addForm">
                    @csrf
                    <fieldset>
                        <legend>Add Category</legend>
                       
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="user-settings-email">Category</label>
                            <div class="col-md-7">
                                <input type="text" id="user-settings-email" name="title" class="form-control" placeholder="Enter category name">
                                <p id="category_error"></p>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary" id="btnSave">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>
{{-- for edit --}}
<div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;"  id="editForm">
                    @csrf
                    {{method_field('PUT')}}
                    <fieldset>
                        <legend>Edit Category</legend>
                       
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="user-settings-email">Category</label>
                            <div class="col-md-7 edit_category">
                                <input type="text" id="title" name="title" class="form-control" placeholder="Enter category name">
                                <p id="category_edit_error" style="color: red"></p>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary" id="btnEdit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>
@push('scripts')

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
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
             var categoryId  = $(this).data('id');
             var status = $(this).data('status');
             console.log($(this).val());

                if(status == 1)
                 {
                    console.log('test');
                     var chk = '0';
                 }else{
                    console.log('test12');
                    var chk = '1';
                } 
            $.post('{{route('admin.change.gallary.category.status')}}',{'_token':'{{csrf_token()}}',category_id:categoryId, status:chk}, function(){

                toastr.success('status changed successfully');
            });
        });
    </script>

{{-- for add  --}}
    <script type="text/javascript">
      
        $("#btnSave").click(function(e){
             e.preventDefault()
            var $form = $("#addForm");
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),
                success: function (data, status) {

                     if(data.error){
                        return;
                    }

                    $('#show_modal').modal('hide');  
                    toastr.success(data.success);
                    window.location.reload();
                },
                error: function (xhr, status, error) {
                    var err = JSON.parse(xhr.responseText);
                    $('#category_error').append(err.errors.title);
                }
            });

         });
    </script>


    {{-- get data for edit --}}
    <script type="text/javascript">
        $('#example').delegate('.edit', 'click', function(){
            var category = $.parseJSON($(this).attr('data-category'));
            // console.log(category);
            $.each(category, function(index, val){
                $('#editModal').find('#'+index).val(val);
            });

            $('#editForm').attr('action','/gallary_category/'+category.id);
            $('#editModal').modal('show');
        });
    </script>

    {{-- for edit data --}}
     <script type="text/javascript">
      
        $("#btnEdit").click(function(e){
             e.preventDefault()
            var $form = $("#editForm");
            
            // console.log($form.attr('action'));
            $.ajax({
                type: 'PUT',
                url: $form.attr('action'),
                data: $form.serialize(),
                success: function (data, status) {

                     if(data.error){
                        return;
                    }
                   toastr.success(data.success);
                    $('#editModal').modal('hide');  // Your modal Id
                    window.location.reload();
                },
                error: function (xhr, status, error) {
                    var err = JSON.parse(xhr.responseText);
                    console.log(err);
                    $('#category_edit_error').append(err.errors.title);
                }
            });

         });
    </script>

    {{-- for delete --}}
    <script type="text/javascript">
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
        })
    </script>
 @endpush


@endsection


