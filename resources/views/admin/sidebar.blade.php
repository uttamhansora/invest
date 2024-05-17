<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('frontend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('frontend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="{{url('countries')}}" class="nav-link {{\Request::segment(1)=='countries' ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Countries
                <!-- <span class="right badge badge-danger">Countries</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('states')}}" class="nav-link {{\Request::segment(1)=='states' ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              States
                <!-- <span class="right badge badge-danger">Countries</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('cities')}}" class="nav-link {{\Request::segment(1)=='cities' ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Cities
                <!-- <span class="right badge badge-danger">Countries</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('users')}}" class="nav-link {{\Request::segment(1)=='users' ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('contactform')}}" class="nav-link {{\Request::segment(1)=='contactform' ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Contact Forms
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('qr-code')}}" class="nav-link {{\Request::segment(1)=='qr-code' || \Request::segment(1)=='add-qr-code' ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                QR Codes
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('subscription')}}" class="nav-link {{\Request::segment(1)=='subscription' ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sub Scriptions
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('deposit')}}" class="nav-link {{\Request::segment(1)=='deposit' ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Deposit Request
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('notification')}}" class="nav-link {{\Request::segment(1)=='notification' ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Notification
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('verifydoc')}}" class="nav-link {{\Request::segment(1)=='verifydoc' ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Documents
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('admin.logout')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Log out
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
         
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>