<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav mt pt-4">
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard')}}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    @if (Auth::user()->role == 'admin')
    
    <li class="nav-item">
      <a class="nav-link" href="{{route('kategori.index')}}">
        <span class="menu-title">Jenis Pekerjaan</span>
        <i class="mdi mdi-bookmark menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('cabang.index')}}">
        <span class="menu-title">Cabang Pelayanan</span>
        <i class="mdi mdi-clipboard menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('pengaduan.index')}}">
        <span class="menu-title">Pengaduan Masuk</span>
        <i class="mdi mdi-bookmark menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('laporan.index')}}">
        <span class="menu-title">Laporan</span>
        <i class="mdi mdi-book menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('user.index')}}">
        <span class="menu-title">Akun</span>
        <i class="mdi mdi-account menu-icon"></i>
      </a>
    </li>

    @else

    <li class="nav-item">
      <a class="nav-link" href="{{route('pengaduan.index')}}">
        <span class="menu-title">Pengaduan</span>
        <i class="mdi mdi-clipboard menu-icon"></i>
      </a>
    </li>

    @endif

  </ul>
</nav>