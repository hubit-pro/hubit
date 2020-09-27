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
            <h2><strong>Gallary</strong>Sub Category</h2>
            <h2 style="float: right;"><button class="btn btn-primary" onclick="$('#show_modal').modal('show');">ADD</button></h2>
        <br><br>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th >SN</th>
                        <th>SubCategory</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @forelse($subCategories as  $key=>$subCategory)
                    <tr id="gallarySubCategory{{$subCategory->id}}">
                        <td>{{++$key}}</td>
                        <td>{{$subCategory->title}}</td>
                        <td>@if($subCategory->gallaryCategory){{$subCategory->gallaryCategory->title}}@endif</td>
                        <td><input @if($subCategory->status == '1') checked="checked" @endif type="checkbox" name="status" data-id="{{$subCategory->id}}" data-status="{{$subCategory->status}}"  class="status-switch"></td>
                        <td>
                            <div class="btn-group">
                                <a href="javascript:void(0)" url="{{route('gallary_sub_category.edit', $subCategory->id)}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default edit" data-subCategory="{{$subCategory}}"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger remove_button" url="{{route('gallary_sub_category.destroy', $subCategory->id)}}"><i class="fa fa-times"></i></a>
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
                <form action="{{route('gallary_sub_category.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;"  id="addForm">
                    @csrf
                    <fieldset>
                        <legend>Add Sub Category</legend>
                       
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="user-settings-email">Category</label>
                            <div class="col-md-7">
                                <select class="form-control" name="gallary_category_id">
                                    <option value="">Select Category</option>
                                    @forelse($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @empty
                                    @endforelse
                                </select>
                                
                                <p class="category_error_gallary_category_id" id="category_error"></p>
                            </div>
                            <label class="col-md-3 control-label" for="user-settings-email">Sub Category</label>
                            <div class="col-md-7">
                                <input type="text" id="user-settings-email" name="title" class="form-control" placeholder="Enter category name">
                                <p class="category_error_title category" id="category_error"></p>
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
                        <legend>Edit Sub Category</legend>
                       
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="user-settings-email">Category</label>
                            <div class="col-md-7 edit_category">
                                <select class="form-control" name="gallary_category_id" id="gallary_category_id">
                                    <option value="">Select Category</option>
                                    @forelse($categories as $category)
                                    <option value="{{$category->id}}" id="gallary_category_id">{{$category->title}}</option>
                                    @empty
                                    @endforelse
                                </select>
                                <p class="category_edit_error_gallary_category_id" id="category_error"></p>
                            </div>
                            <label class="col-md-3 control-label" for="user-settings-email">Sub Category</label>
                            <div class="col-md-7 edit_category">
                                <input type="text" id="title" name="title" class="form-control" placeholder="Enter category name">
                                <p class="category_edit_error_title" id="category_error"></p>
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
             var subCategoryId  = $(this).data('id');
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
            $.post('{{route('change.gallary.sub.category.status')}}',{'_token':'{{csrf_token()}}',sub_category_id:subCategoryId, status:chk}, function(){

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
                    console.log(err);
                    $('.category_error_gallary_category_id').append(err.errors.gallary_category_id);
                    $('.category_error_title').append(err.errors.title);
                }
            });

         });
    </script>


    {{-- get data for edit --}}
    <script type="text/javascript">
        $('#example').delegate('.edit', 'click', function(){
            var subCategory = $.parseJSON($(this).attr('data-subCategory'));
            console.log(subCategory);
            $.each(subCategory, function(index, val){
                $('#editModal').find('#'+index).val(val);
            });

            $('#editForm').attr('action','/gallary_sub_category/'+subCategory.id);
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
                    $('.category_edit_error_gallary_category_id').append(err.errors.gallary_category_id);
                    $('.category_edit_error_title').append(err.errors.title);
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


