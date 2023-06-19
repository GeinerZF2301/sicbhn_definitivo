<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
    data-wow-delay="0.1s">
    <a href="{{ url('/') }}" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="/zoofari/img/LogoCorredor.webp" alt="Icon" />
        <h1 class="m-0 text-primary">SICBHN</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        
        <div class="navbar-nav ms-auto">
            <a href="{{ url('/') }}" class="nav-item nav-link">{{ __('messages.NavBarLoginInicio') }}</a>
            <a href="{{ url('/register') }}" class="nav-item nav-link">{{ __('messages.NavBarBotonRegister') }}</a>
            <a href="{{ url('login') }}" class="nav-item nav-link">{{ __('messages.NavBarBotonLogin') }}</a>
           
                  
        </div>
       
     
    </div>
     
</nav>
