<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
          <li class="nav-item has-treeview {{ Request::is('admin/category*') ? 'menu-open' : '' }}">
            {{-- <a href="#" class="nav-link {{ Request::is('admin/category/vendor*') ? 'active' : '' }}"> --}}
                <a href="#" class="nav-link {{ Request::is('admin/category*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('category.create') }}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link active {{ Request::is('admin/category*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Category</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v3</p>
                    </a>
                </li> --}}
            </ul>
          </li>

            <li class="nav-item has-treeview {{ Request::is('admin/task*') ? 'menu-open' : '' }}">
            {{-- <a href="#" class="nav-link {{ Request::is('admin/task/vendor*') ? 'active' : '' }}"> --}}
                <a href="#" class="nav-link {{ Request::is('admin/task*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
              <p>
                Task
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('task.create') }}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Task</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('task.index') }}" class="nav-link active {{ Request::is('admin/task*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Task</p>
                    </a>
                </li>

            </ul>
        </li>

        </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
