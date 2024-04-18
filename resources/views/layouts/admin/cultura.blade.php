<ul  class="navbar-nav sidebar  accordion" id="accordionSidebar">
    <li class="nav-item" style="background-color:rgb(114, 65, 0); ">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="{{ asset('assets/img/logo/logo2.png') }}">
      </div>
      <div style="background-color:rgb(114, 65, 0);" class="sidebar-brand-text mx-3">Agri-Web</div>
    </a>
</li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="#">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('exibirdados') }}">
        <i class="fas fa-fw fa-database"></i>
        <span>Exibir Dados</span>
      </a>
    </li>
</ul>
