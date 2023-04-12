 @extends('layouts.app')

 @section('content')
     <section class="vh-100 bg-image"
         style="
   background: rgb(23,112,30);
background: -moz-linear-gradient(189deg, rgba(23,112,30,1) 0%, rgba(47,130,41,1) 48%, rgba(14,200,47,1) 100%);
background: -webkit-linear-gradient(189deg, rgba(23,112,30,1) 0%, rgba(47,130,41,1) 48%, rgba(14,200,47,1) 100%);
background: linear-gradient(189deg, rgba(23,112,30,1) 0%, rgba(47,130,41,1) 48%, rgba(14,200,47,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#17701e",endColorstr="#0ec82f",GradientType=1); ">
          <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
               
               

                <center>
                   <div class="col-lg-7  ">
                       <div class="carddd d-flex justify-content-center ">
                            <div class="col-lg-6  d-none d-md-block">
                                <div class="imagen">
                                    <img src="zoofari/img/Login/bbbb.jpg" alt="">
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-8 ">
                                <div class="carddd-body text-black ">
                             
                                        
                                  <h1 class="text-uppercase text-center me-4 ms-4 mt-4 mb-4  h1 fw-bold  mb-0">Crear una cuenta</h1>     

                                  <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                  

                                    <div class="row d-flex justify-content-center align-items-center ">

                                        <div class="col-md-10 col-sm-11 mb-3 me-2 ms-2  ">
                                            <input id="name" type="text" placeholder="Nombre de Usuario" class="form-control @error('name') is-invalid @enderror form-control-md" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="col-md-10 col-sm-11 mb-3 ">
                                            <input id="email" type="email" placeholder="Correo Electrónico" class="form-control @error('email') is-invalid @enderror form-control-md" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                      <br>
                                      <div class="col-md-10 col-sm-11 mb-3">
                                            <input id="password" type="password" placeholder="Contraseña" class="form-control @error('Contraseña') is-invalid @enderror form-control-md" name="password" required autocomplete="new-password">

                                            @error('password')
                                          <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                      @enderror
                                        </div>
                                        <br>
                                        <div class="col-md-10 col-sm-11 mb-3">
                                          <input id="password-confirm" type="password" placeholder="Confirmar contraseña" class="form-control form-control-md" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <br>
                                        
                                        <div class="row ">
                                            <div class="col-md-12 justify-content-center mt-1 mb-4 ">
                                                <button type="submit" class="btnregister btn btn-primary">
                                                    {{ __('Registrarse') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                  </form>
                                </div>
                            </div>
                       </div>
                   </div>
                </center>



               
              </div>
            </div>
          </div>
        </section>
@endsection
