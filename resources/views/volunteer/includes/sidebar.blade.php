<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <i class="fas fa-list-alt  ml-4"></i>
        <span class="brand-text font-weight-light">Main</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Main menu
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('volunteer.deliveries.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-truck"></i>
                        <p>
                            Deliveries
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('volunteer.acts.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Acts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('volunteer.groups.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            My group
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('volunteer.study.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Study
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
