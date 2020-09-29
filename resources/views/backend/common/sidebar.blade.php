<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Brand -->
            <a href="{{route('admin.dashboard')}}" class="sidebar-brand">
                <strong style="margin-left: 40px;">HUB IT</strong>
                {{-- <img src="{{asset('images/logo_top.png')}}" class="logo_main" alt="" style="width: 122px;"> --}}
            </a>
            <!-- END Brand -->

            <!-- User Info -->
            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                <div class="sidebar-user-avatar">
                    <a href="{{route('admin.dashboard')}}">
                        <img src="{{asset('img/logo.jpg')}}">
                    </a>
                </div>
                <div class="sidebar-user-name">{{Auth::guard('admin')->user()->userName}}</div>
                <div class="sidebar-user-links">
                    <a href="javascript:;" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                    <a href="javascript:;" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                    <a href="{{route('admin.logout')}}" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                </div>
            </div>
            <!-- END User Info -->
           
            <!-- END Theme Colors -->

            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="{{route('admin.dashboard')}}"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                </li>
                {{-- @if(Auth::guard('admin')->user()->role == 1) --}}
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Manager</span></a>
                    <ul>
                        <li>
                            <a href="">Managers</a>
                        </li>
                    </ul>
                </li>
                {{-- @endif --}}

                 <li>
                    <a href="javascript:;" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Gallary</span></a>
                    <ul>
                        <li><a href="{{route('admin.gallary_category.index')}}">Category</a></li>
                        <li><a href="{{route('admin.gallary_sub_category.index')}}">Sub Category</a></li>
                        <li><a href="{{route('admin.gallary.index')}}">Gallary</a></li>
                    </ul>
                </li>

                 <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">News</span></a>
                    <ul>
                        <li>
                            <a href="">News Category</a>
                        </li>
                        <li>
                            <a href="">News</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Article</span></a>
                    <ul>
                        <li>
                            <a href="">Article</a>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-show_big_thumbnails sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">More</span></a>
                    <ul>
                        <li><a href="{{route('admin.aboutus.index')}}">About Us</a></li>
                    </ul>
                </li>
                
            </ul>
            <!-- END Sidebar Navigation -->

        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>