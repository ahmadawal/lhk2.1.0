  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        @if (route('cn'))
        <a href="{{ route('form') }}" class="nav-link">
          Buat baru
          <i class="fas fa-plus"></i>
        </a>
        @endif
        
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->