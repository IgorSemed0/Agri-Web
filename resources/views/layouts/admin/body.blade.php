<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head')

<body id="page-top">
    @auth
    <div id="wrapper">
        <!-- Sidebar -->

    @endauth

        @include('layouts.admin.menu')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
               @auth
                   <nav class="navbar navbar-expand navbar-dark mb-4 static-top">
                                       <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
               @endauth

                    <ul class="navbar-nav ml-auto">
                        <div class="dropdown-list dropdown-menu dropdown-menu-right animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Task
                            </h6>
                            <a class="dropdown-item align-items-center" href="#">
                                <div class="mb-3">
                                    <div class="small text-gray-500">Design Button
                                        <div class="small float-right"><b>50%</b></div>
                                    </div>
                                    <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item align-items-center" href="#">
                                <div class="mb-3">
                                    <div class="small text-gray-500">Make Beautiful Transitions
                                        <div class="small float-right"><b>30%</b></div>
                                    </div>
                                    <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item align-items-center" href="#">
                                <div class="mb-3">
                                    <div class="small text-gray-500">Create Pie Chart
                                        <div class="small float-right"><b>75%</b></div>
                                    </div>
                                    <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
                        </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        @auth
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                                    <span class="ml-2 d-none d-lg-inline text-white small">Percy Semedo</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-green-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form action="/logout">
                                        @csrf
                                        <a class="dropdown-item" href="/logout"
                                            onclick="event.preventDefault();
                        this.closeset('form').submit();">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </nav>
                <!-- Topbar -->
                @yield('conteudo')

             <!-- Footer -->
      <footer class="sticky-footer ">
        <div class="container my-auto py-2">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; Agri-Web
            </span>
          </div>
        </div>
      </footer>
    </div>
  </div>
<style>
  #sidebarToggleTop .fa-bars:hover {
      opacity: 1;}
</style>
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/js/ruang-admin.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>

        <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

</body>

</html>
