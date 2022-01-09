<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route("admin.home")}}" class="brand-link">
        <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Old Dog Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="{{route('admin.home')}}" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Posts
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-hashtag"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div><!-- /.sidebar -->
</aside>

