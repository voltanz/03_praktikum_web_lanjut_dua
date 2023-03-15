<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<<<<<<< HEAD
      <span class="brand-text font-weight-light"><b>TI FAST!</b></span>
=======
      <span class="brand-text font-weight-light"><b>Bima Tristan</b></span>
>>>>>>> e911ebe5eb77bc700e6eec3e93bd92f127c70962
    </a>
<br>
    <!-- Sidebar -->
    <div class="sidebar">
<<<<<<< HEAD
=======
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/bima.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ahmad Bima Tristan Ibrahim</a>
        </div>
      </div>

>>>>>>> e911ebe5eb77bc700e6eec3e93bd92f127c70962
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
<br>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->

            <li class="nav-item menu-open">
                <a href="{{url('/dashboard')}}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                      Dashboard
                  </p>
              </a>
            </li>
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Profil
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/profile1')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Profil Azzam</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/profile2')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Profil Bima</p>
                    </a>
                  </li>
                </ul>
              </li>
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-graduation-cap"></i>
                  <p>
                    Pengalaman Kuliah
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/kuliah1')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Azzam</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/kuliah2')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Bima</p>
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