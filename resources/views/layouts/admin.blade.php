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
            <span class="menu-title">Inicio</span>
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
              @can('ver-Persona/Solicitudes')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/personas') }}">Gestión de las
                  Personas</a></li>
                @endcan
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#request" aria-expanded="false" aria-controls="request">
            <i class="mdi mdi-message-alert menu-icon"></i>
            <span class="menu-title">Solicitudes</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="request">
            <ul class="nav flex-column sub-menu">
              @can('ver-Persona/Solicitudes')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/solicitudesvoluntarios') }}"> Solicitud de Voluntariados
                </a></li>
                @endcan
                @can('ver-Persona/Solicitudes')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/solicitudestalleres') }}">Solicitud de Talleres</a></li>
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
              <li class="nav-item"> <a class="nav-link" href="{{ url('/documentacion') }}">Documentos del CBHN</a>
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
              <li class="nav-item"> <a class="nav-link" href="{{ url('/campannas') }}">Gestión de las
                  campañas</a></li>
            @endcan
            @can('ver-Voluntarios/Historial')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/voluntariados') }}">Gestión de los
                  voluntariados</a></li>
            @endcan
            @can('ver-Taller/Historial')
            <li class="nav-item"> <a class="nav-link" href="{{ url('/gestiontalleres') }}">Gestión de los
                Talleres</a></li>
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
              @can('ver-DonacionMonetarias')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/donacionMonetaria') }}">Monetarias</a></li>
              @endcan
              @can('ver-DonacionEspecies')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/donacionEspecie') }}">En Especie</a></li>
              @endcan

              @can('ver-CuentasBancarias')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/cuentaBancaria') }}">Cuentas
                  Bancarias</a>
              </li>
              @endcan
              @can('ver-DonacionArticulos')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/articulos') }}">Artículos y
                  Alimentos</a></li>
              @endcan
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-folder-multiple-image menu-icon"></i>
            <span class="menu-title">Galeria</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
            @can('ver-Galeria')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/galeriaimagenes') }}">Galeria
                </a></li>
                @endcan
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
              @can('ver-usuario')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/usuarios') }}">Usuarios</a>
              </li>
              @endcan
              @can('ver-rol')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/roles') }}">Roles</a></li>
              @endcan
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#historial" aria-expanded="false" aria-controls="historial">
            <i class="mdi mdi-history menu-icon"></i>
            <span class="menu-title">Historial de Solicitudes</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="historial">
            <ul class="nav flex-column sub-menu">
              @can('ver-Voluntarios/Historial')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/historialvoluntarios') }}"> Participantes Voluntarios</a>
              </li>
              @endcan
              @can('ver-Taller/Historial')
              <li class="nav-item"> <a class="nav-link" href="{{ url('/historialtalleres') }}"> Participantes Talleres</a></li>
            </ul>
            @endcan
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
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <!-- <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a> -->
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="zoofari/img/LogoCorredor.webp"
                alt="logo" /></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">¡Bienvenido!</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">Mar 12, 2019 - Apr 10, 2019</h4>
            </li>
            <li class="nav-item dropdown mr-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                id="messageDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-calendar mx-0"></i>
                <span class="count bg-info">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="spica/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown mr-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-open mx-0"></i>
                <span class="count bg-danger">1</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>

      </nav>
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
  </div>
        <div class="js">
        @yield('js')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="{{ asset('spica/vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
        <script src="{{asset('spica/js/off-canvas.js')}}"></script>
        <script src="{{asset('spica/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('spica/js/template.js')}}"></script>
        
      </div>
</body>

</html>