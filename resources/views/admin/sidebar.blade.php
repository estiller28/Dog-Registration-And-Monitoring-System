<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="">
            <span class="align-middle">
                <img class="img-fluid" style="width: 150px;" src="{{ asset('./storage/logo/logo.png') }}">
            </span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
            </li>

            @role('Admin')
            <li class="sidebar-item {{ Request::is('admin/dashboard')? 'active': '' }} ">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('admin/manage/users') ||  Request::is('admin/user/*')? 'active': '' }}">
                <a class="sidebar-link " href="{{ route('users.index') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">User Management</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('admin/dogs') ||  Request::is('admin/dogs/*') ? 'active': '' }}">
                <a class="sidebar-link" href="{{ route('dogs.index') }}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Dog Management</span>
                </a>
            </li>

            @else

                <li class="sidebar-item {{ Request::is('co-admin/dashboard')? 'active': '' }} ">
                    <a class="sidebar-link" href="{{ route('coAdminDashboard') }}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="">
                        <i class="align-middle" data-feather="list"></i> <span class="align-middle">Dog Management</span>
                    </a>
                </li>


            @endrole




        </ul>
    </div>
</nav>
