<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="zoofari/img/LogoCorredor.webp" alt="Icon" />
            <h1 class="m-0 text-primary">SICBHN</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ url('/') }}" class="nav-item nav-link ">Inicio</a>
                <a href="{{ url('/voluntariado') }}" class="nav-item nav-link">Voluntariados</a>
                <a href="{{ url('/campannas') }}" class="nav-item nav-link">Campañas</a>
                <a href="{{ url('/talleres') }}" class="nav-item nav-link">Talleres</a>
                <a href="{{ url('/donaciones') }}" class="nav-item nav-link">Donaciones</a>
                
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sobre Nosotros</a>

                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{ url('/sobrenosotros') }}" class="dropdown-item">Sobre nosotros</a>
                        <a href="{{ url('/galeria') }}" class="dropdown-item">Galería</a>
                        <a href="{{ url('/horavisita') }}" class="dropdown-item">Horas de visita</a>
                        <a href="{{ url('/documentos') }}" class="dropdown-item">Documentos</a>
                    </div>
                </div>
                <a href="{{ url('/contactos') }}" class="nav-item nav-link">Contactos</a>
            </div>


            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-warning">Iniciar Sesión<i class="fa fa-right ms-0"></i></a>
                @endif

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-success">Registrarse<i class="fa fa-right ms-0"></i></a>
                @endif
            @else
                
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                
            @endguest

        </div>
    </nav>