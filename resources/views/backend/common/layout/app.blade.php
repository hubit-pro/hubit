<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        {{-- <link rel="icon" type="image/x-icon" href="{{asset('images/logo_top.png')}}" /> --}}
        {{-- <img src="{{asset('images/logo_top.png')}}" class="logo_main" alt="" style="width: 122px;"> --}}
        <title>Hubit</title>

        <meta name="description" content="Hubit">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{asset('img/icon57.png')}}" sizes="57x57">
        <link rel="apple-touch-icon" href="{{asset('img/icon72.png')}}" sizes="72x72">
        <link rel="apple-touch-icon" href="{{asset('img/icon76.png')}}" sizes="76x76">
        <link rel="apple-touch-icon" href="{{asset('img/icon114.png')}}" sizes="114x114">
        <link rel="apple-touch-icon" href="{{asset('img/icon120.png')}}" sizes="120x120">
        <link rel="apple-touch-icon" href="{{asset('img/icon144.png')}}" sizes="144x144">
        <link rel="apple-touch-icon" href="{{asset('img/icon152.png')}}" sizes="152x152">
        <link rel="apple-touch-icon" href="{{asset('img/icon180.png')}}" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/plugins.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/themes.css')}}">
        <script src="{{asset('backend/js/vendor/modernizr.min.js')}}"></script>
        
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/dist/sweetalert.css') }}">
        <link href="{{asset('backend/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">



        @stack('styles')

        <style type="text/css">
            #category_error {
                color:red;
            }
        </style>

    </head>
    <body>

        <div id="page-wrapper">
          
            <!-- END Preloader -->

            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
            
                <!-- Main Sidebar -->
                @include('backend.common.sidebar')
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                   @include('backend.common.header')
                    
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard 2 Header -->
                        {{-- @include('backend.common.content_header') --}}
                        @yield('content-header')
                        <!-- END Dashboard 2 Header -->

                        <!-- Dashboard 2 Content -->
                        <div class="row">
                            @yield('content')
                        </div>
                        <!-- END Dashboard 2 Content -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        {{-- <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div> --}}
                        <div class="pull-left">
                            {{-- <span id="year-copy">77</span> &copy; <a href="https://1.envato.market/x4R" target="_blank">ProUI 3.8</a> --}}
                            <span >2020</span> &copy; <a href="javascript:;" target="_blank">Hubit</a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="{{-- {{route('admin.changePassword.update', Auth::guard('admin')->user()->slug)}} --}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;" id="changePasswordForm">
                            @csrf
                            {{method_field('PUT')}}
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <input type="text" id="userName" name="userName" class=
                                        "form-control" value="{{-- {{Auth::guard('admin')->user()->userName}} --}}">
                                        <p class="userName_error" id="category_error"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <p class="email_error" id="category_error"></p>
                                        <input type="email" id="user-settings-email" name="email" class="form-control" value="{{-- {{Auth::guard('admin')->user()->email}} --}}" disabled=""><input type="hidden" id="user-settings-email" name="email" class="form-control" value="{{-- {{Auth::guard('admin')->user()->email}} --}}">
                                    </div>
                                </div>
                             </fieldset>
                             <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">Old Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="old_password" class="form-control" placeholder="Please enter old password">
                                        <p class="old_password_error" id="category_error"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="password" class="form-control" placeholder="Please choose a complex one..">
                                        <p class="password_error" id="category_error"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="confirm_password" class="form-control" placeholder="..and confirm it!">
                                        <p class="confirm_password_error" id="category_error"></p>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary " id="changePassword">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="{{asset('backend/js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('backend/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('backend/js/plugins.js')}}"></script>
        <script src="{{asset('backend/js/app.js')}}"></script>


        <script src="{{asset('backend/dist/sweetalert.min.js')}}"></script>

        <script src="{{asset('backend/js/plugins/toastr/toastr.min.js')}}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {

                @if(Session::has('success'))
                toastr.success("{{ Session::get('success')}}")
                @endif
                @if(Session::has('danger'))
                toastr.danger("{{ Session::get('danger')}}")
                @endif
                @if(Session::has('info'))
                toastr.info("{{ Session::get('info')}}")
                @endif
            });
       </script>

        @stack('scripts')
    </body>
</html>


  <script type="text/javascript">
      
        $("#changePassword").click(function(e){
             e.preventDefault()
            var $form = $("#changePasswordForm");
          
            $.ajax({
                type: 'PUT',
                url: $form.attr('action'),
                data: $form.serialize(),
                success: function (data, status) {

                    if(data.error){
                        return;
                    }

                    $('#modal-user-settings').modal('hide');  
                    toastr.success(data.message);
                },
                error: function (xhr, status, error) {
                    var err = JSON.parse(xhr.responseText);
                    $('.userName_error').append(err.errors.userName);
                    $('.email_error').append(err.errors.email);
                    $('.old_password_error').append(err.errors.old_password);
                    $('.password_error').append(err.errors.password);
                    $('.confirm_password_error').append(err.errors.confirm_password);
                }
            });

         });
    </script>