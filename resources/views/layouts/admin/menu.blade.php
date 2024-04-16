<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="{{ asset('assets/img/logo/logo2.png') }}">
      </div>
      <div class="sidebar-brand-text mx-3">Agri-Web</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <!-- Novo item de menu para exibir dados -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('exibirdados') }}">
        <i class="fas fa-fw fa-database"></i>
        <span>Exibir Dados</span>
      </a>
    </li>
</ul>
