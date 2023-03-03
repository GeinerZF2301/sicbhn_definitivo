<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gestión Administrativa</title>
  <link rel="stylesheet" href={{ asset('css/admin-styles.css') }}>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" href="{{ asset('spica/vendors/mdi/css/materialdesignicons.min.css') }}">
  {{--
  <link rel="stylesheet" href="{{ asset('spica/vendors/css/vendor.bundle.base.css') }}"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href={{ asset('css/admin-styles.css') }}>
  <link rel="stylesheet" href="{{ asset('spica//css/style.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

</head>

<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Menú administrativo</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin">
            <i class="mdi mdi-border-all menu-icon"></i>
            <span class="menu-title">Inicio </span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Módulos</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-human-male-female menu-icon"></i>
            <span class="menu-title">Personas</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              @can('ver-TipoPersona')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/tipospersonas') }}">Tipos de
                  Personas
                </a></li>
                @endcan
              @can('ver-Persona')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/personas') }}">Gestión de las
                  Personas</a></li>
                @endcan
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class=" mdi mdi-file-pdf menu-icon"></i>
            <span class="menu-title">Documentación</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
            @can('ver-Documento')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/documentacion') }}">Documentos del
                  CBHN</a>
              </li>
            @endcan
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#chartjs" aria-expanded="false" aria-controls="chartjs">
            <i class="mdi mdi-bullhorn menu-icon"></i>
            <span class="menu-title">Actividades del CBHN</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="chartjs">
            <ul class="nav flex-column sub-menu">
            @can('ver-Campañas')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/campannasadmin') }}">Gestión de las
                  campañas</a></li>
            @endcan
            @can('ver-Voluntarios')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/voluntariados') }}">Gestión de los
                  voluntariados</a></li>
            @endcan
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <i class="mdi mdi-cash-multiple menu-icon"></i>
            <span class="menu-title">Donaciones</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ url('') }}">Monetarias</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ url('') }}">En Especie</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ url('') }}">Cuentas
                  Bancarias</a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="{{ url('') }}">Artículos y
                  Alimentos</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">Usuarios</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ url('/usuarios') }}">Usuarios</a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="{{ url('/roles') }}">Roles</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">
            <i class="mdi  mdi-exit-to-app menu-icon"></i>
            <button class="btn btn-warning btn-sm menu-title">Volver al inicio</button>

          </a>
        </li>
      </ul>
    </nav>
   </div>
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:./partials/_footer.html -->
      <footer class="footer">
        <div class="card">
          <div class="card-body">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                bootstrapdash.com 2020</span>
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed By:
                <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                  href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard
                  templates</a> from Bootstrapdash.com</span>
            </div>
          </div>
        </div>
      </footer>
    

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                  bootstrapdash.com 2020</span>
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Todos los
                  derechos reservados</a></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                    href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard
                    templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->

        <!-- main-panel ends -->

        <!-- page-body-wrapper ends -->
      </div>
      <div class="js">
        @yield('js')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="{{ asset('spica/vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
      </div>
</body>

</html>
