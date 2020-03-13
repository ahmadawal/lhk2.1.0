  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Jembo Cable</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/jmb.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('form') }}" class="nav-link" id="form">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('list') }}" class="nav-link active" id="link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                List Data LHK
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('graph-m') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Grafik Mesin
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('timeline') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Timeline
              </p>
            </a>
          </li>        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>