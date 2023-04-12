@extends('layouts.app')
@section('content')


{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidó su contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}




<section class="vh-100" style="  background-image: url('zoofari/img/Login/Osprey.jpg'); 
background-repeat: no-repeat;
background-size: cover; 
background-position: center;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <center>
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;   max-width: 500px;">
            <div class="row g-0">
              {{-- <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="zoofari/img/Login/logfondo.jpg"
                  alt="login form" style="border-radius: 1rem 0 0 1rem; height: 100%;     max-width: 100%; filter: blur(5px);" />
              </div> --}}
              <div class="">
                
                <div class="card-body p-4 p-lg-5 text-black">
  
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Corredor Biólogico Hojancha Nandayure</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión en su cuenta</h5>
                   
                    <div class="form-outline mb-4">
                        <div class="row mb-3">
                           <center>
                            <div class="col-md-10">
                                <input id="email" type="email" placeholder="Correo Electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </center>
                        </div>

                    </div>

    
  
                    <div class="form-outline mb-4">

                        <div class="row mb-3">
                            <center>
                            <div class="col-md-10">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </center>
                        </div>

                    </div>
               
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block " type="submit"> {{ __('Iniciar Sesión') }}</button>
                    </div>
  
                
                       <div class="Info" style="display: flex;
                       align-content: center;
                       align-items: center;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recuérdame') }}
                                </label>
                            </div>
                      

                    @if (Route::has('password.request'))
                    <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                        {{ __('¿Olvidó su contraseña?') }}
                    </a>
                @endif
             </div>

             <a class=" mt-4 btn btn-link text-decoration-none" href="/register">
                <span class="text-dark text-decoration-none">¿Aún no tienes una cuenta?</span>
                Regístrate Ahora
            </a>

            
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
    </center>
      </div>
    </div>
  </section> 




@endsection



