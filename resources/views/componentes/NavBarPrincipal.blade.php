<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn "
    data-wow-delay="0.1s">
    <a href="{{ url('/') }}" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="zoofari/img/LogoCorredor.webp" alt="Icon" />
        <h1 class="m-0 text-primary">SICBHN</h1>
    </a>



    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">

          

             <div class="row ms-3   d-lg-none ">
                <div class="col  ">
                    <a class="m-2 " href="/locale/en"> <img src="zoofari/img/USA.webp" alt=""></a>
                    <a class="m-2" href="/locale/ger"> <img src="zoofari/img/GER.webp" alt=""></a>
                    <a class="m-2" href="/locale/es"><img src="zoofari/img/CR.webp" alt=""></a>
                </div>
              
            </div> 


            <a href="{{ url('/') }}" class="nav-item nav-link">{{ __('messages.NavBarInicio') }}</a>
            <a href="{{ url('/donaciones') }}" class="nav-item nav-link">{{ __('messages.NavBarDonaciones') }}</a>


              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown">{{ __('messages.NavBarActividades') }}</a>

                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="{{ url('/voluntariado') }}" class="dropdown-item">{{ __('messages.NavBarVoluntariados') }}</a>
                    <a href="{{ url('/campañas') }}" class="dropdown-item">{{ __('messages.NavBarCampaña') }}</a>
                    <a href="{{ url('/talleres') }}" class="dropdown-item">Talleres</a>
                </div>

            </div>



            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown">{{ __('messages.NavBarSobreNosotros') }}</a>

                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="{{ url('/sobrenosotros') }}" class="dropdown-item">
                        {{ __('messages.NavBarSobreNosotros') }}</a>
                    <a href="{{ url('/galeria') }}"
                        class="dropdown-item">{{ __('messages.NavBarDropDownGaleria') }}</a>
                    <a href="{{ url('/horavisita') }}" class="dropdown-item">
                        {{ __('messages.NavBarDropDownHorasVisita') }} </a>
                    <a href="{{ url('/documentos') }}"
                        class="dropdown-item">{{ __('messages.NavBarDropDownHorasDocumentacion') }}</a>
                    <a href="{{ url('/contactos') }}"
                        class="dropdown-item">{{ __('messages.NavBarContactos') }}</a>
                </div>
            </div>
 
    
                      
        </div>
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
            <a href="{{ route('login') }}" class="btn btn-success">{{ __('messages.NavBarBotonLogin') }}<i
                    class="fa fa-right ms-0"></i></a>
        @endif
    @else
        {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a> --}}


    <div class="nav-item dropdown">
            <a href="#" role="button" class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">

                @can('ver-administracion')
                <a href="{{ url('/admin') }}" class="nav-item nav-link"> Administración </a>
                @endcan
            
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        @endguest
    </div>

</nav>
