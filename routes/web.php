<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PersonaController;
use App\Http\Controllers\Admin\TipoPersonaController;
use App\Http\Controllers\Admin\CampañaController;
use App\Http\Controllers\Admin\VoluntariadoController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\DocumentoController;
use App\Http\Controllers\Admin\GaleriaController;
use App\Http\Controllers\Cliente\CampañaClienteController;
use App\Http\Controllers\Cliente\DocumentosClienteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ArticuloController;
use App\Http\Controllers\Admin\DonacionMonetariaController;
use App\Http\Controllers\Admin\DonacionEspecieController;
use App\Http\Controllers\Admin\CuentaBancariaController;
use App\Http\Controllers\Cliente\GaleriaClienteController;
use App\Http\Controllers\Cliente\VoluntariadoClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\LocaleCookieMiddleware;


//AQUI VAN LAS RUTAS DE VISTAS

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/locale/{locale}', function($locale){
    return redirect()->back()->withCookie('locale', $locale);
});

Route::middleware(LocaleCookieMiddleware::class)->group(function () {
    Route::get('/',[HomeController::class, 'index'])->name('home');
    Route::get('/campañas',[CampañaClienteController::class, 'index'])->name('campannacliente');
    Route::get('/documentos',[DocumentosClienteController::class, 'index'])->name('documentoscliente');

    Route::get('/contactos', function () {
        return view('principal/contactos.contactos-index');
    });
    
    Route::get('/donaciones', function () {
        return view('principal/donaciones.donaciones-index');
    });
    
    Route::get('/galeria',[GaleriaClienteController::class, 'index'])->name('galeria');
       
    Route::get('/sobrenosotros', function () {
        return view('principal/sobrenosotros.sobrenosotros-index');
    });
    Route::post('/solicitudvoluntariado', [VoluntariadoClienteController::class, 'storstoreSolicitudPersona'])->name('store');
    Route::get('/voluntariado', [VoluntariadoClienteController::class, 'index'])->name('index');
});



Route::get('/campannas',[CampañaClienteController::class, 'index'])->name('campannacliente');

Route::get('/documentos',[DocumentosClienteController::class, 'index'])->name('documentoscliente');
// Route::post('/storepersonacliente',[CampañaClienteController::class, 'storePersonaCliente'])->name('campannacliente');



Auth::routes(['verify' => true]);



Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('admin', AdminController::class);

    /*Routas Donoaciones admin*/
   


    // Rutas para el modulo de Donacion Especie
    Route::get('/donacionEspecie',[DonacionEspecieController::class,'index'])->name('donacionEspecie');
    Route::post('/donacionEspecie/store',[DonacionEspecieController::class,'store'])->name('donacionEspecie.store');
    Route::get('/donacionEspecie/{id}/edit',[DonacionEspecieController::class,'edit'])->name('donacionEspecie.edit');
    Route::post('/donacionEspecie/update/{id}',[DonacionEspecieController::class,'update'])->name('donacionEspecie.update');
    Route::delete('/donacionEspecie/delete/{id}',[DonacionEspecieController::class,'delete'])->name('donacionEspecie.delete');
    Route::get('/donacionEspecie/{id}/show',[DonacionEspecieController::class,'show'])->name('donacionEspecie.show');

    // Rutas para el modulo de Donacion Monetaria
    Route::get('/donacionMonetaria',[DonacionMonetariaController::class,'index'])->name('donacionMonetaria');
    Route::post('/donacionMonetaria/store',[DonacionMonetariaController::class,'store'])->name('donacionMonetaria.store');
    Route::get('/donacionMonetaria/{id}/edit',[DonacionMonetariaController::class,'edit'])->name('donacionMonetaria.edit');
    Route::post('/donacionMonetaria/update/{id}',[DonacionMonetariaController::class,'update'])->name('donacionMonetaria.update');
    Route::delete('/donacionMonetaria/delete/{id}',[DonacionMonetariaController::class,'delete'])->name('donacionMonetaria.delete');
    Route::get('/donacionMonetaria/{id}/show',[DonacionMonetariaController::class,'show'])->name('donacionMonetaria.show');

    // Rutas para el modulo de Cuentas Bancarias
    Route::get('/cuentaBancaria',[CuentaBancariaController::class,'index'])->name('cuentaBancaria');
    Route::post('/cuentaBancaria/store',[CuentaBancariaController::class,'store'])->name('cuentaBancaria.store');
    Route::get('/cuentaBancaria/{id}/edit',[CuentaBancariaController::class,'edit'])->name('cuentaBancaria.edit');
    Route::post('/cuentaBancaria/update/{id}',[CuentaBancariaController::class,'update'])->name('cuentaBancaria.update');
    Route::delete('/cuentaBancaria/delete/{id}',[CuentaBancariaController::class,'delete'])->name('cuentaBancaria.delete');
    Route::get('/cuentaBancaria/{id}/show',[CuentaBancariaController::class,'show'])->name('cuentaBancaria.show');

    // Rutas para el modulo de Tipos de Persona
    Route::get('/tipospersonas',[TipoPersonaController::class,'index'])->name('tipospersonas');
    Route::post('/tipospersonas/store',[TipoPersonaController::class,'store'])->name('tipospersonas.store');
    Route::get('/tipospersonas/{id}/edit',[TipoPersonaController::class,'edit'])->name('tipospersonas.edit');
    Route::post('/tipospersonas/update/{id}',[TipoPersonaController::class,'update'])->name('tipospersonas.update');
    Route::delete('/tipospersonas/delete/{id}',[TipoPersonaController::class,'delete'])->name('tipospersonas.delete');
    Route::get('/tipospersonas/{id}/show',[TipoPersonaController::class,'show'])->name('tipospersonas.show');

    //Rutas para el modulo de Personas
   
    
    //Rutas para el modulo Campañas
    Route::get('/campannas',[CampañaController::class,'index'])->name('campannas');
    Route::post('/campannas/store',[CampañaController::class,'store'])->name('campannas.store');
    Route::get('/campannas/{id}/edit',[CampañaController::class,'edit'])->name('campannas.edit');
    Route::post('/campannas/update/{id}',[CampañaController::class,'update'])->name('campannas.update');
    Route::delete('/campannas/delete/{id}',[CampañaController::class,'delete'])->name('campannas.delete');
    Route::get('/campannas/{id}/show',[CampañaController::class,'show'])->name('campannas.show');
    //Ruta para validar que no se pueda crear una campaña si ya existe una previamente con una misma fecha y hora
    Route::post('/validarcampanna', [CampañaController::class,'validarCampaña']); 
        
    Route::get('/voluntariados',[VoluntariadoController::class,'index'])->name('voluntariados');
    Route::post('/voluntariados/store',[VoluntariadoController::class,'store'])->name('voluntariados.store');
    Route::get('/voluntariados/{id}/edit',[VoluntariadoController::class,'edit'])->name('voluntariados.edit');
    Route::post('/voluntariados/update/{id}',[VoluntariadoController::class,'update'])->name('voluntariados.update');
    Route::delete('/voluntariados/delete/{id}',[VoluntariadoController::class,'delete'])->name('voluntariados.delete');
    Route::get('/voluntariados/{id}/show',[VoluntariadoController::class,'show'])->name('voluntariados.show');
    //Ruta para validar que no se pueda crear un voluntariado si ya existe uno previamente con una misma fecha y hora
    Route::post('/validarvoluntariado', [VoluntariadoController::class,'validarVoluntariado']); 
    
    Route::get('/documentacion',[DocumentoController::class,'index'])->name('documentacion');
    Route::post('/documentos/store',[DocumentoController::class,'store'])->name('documentos.store');
    Route::get('/documentos/{id}/edit',[DocumentoController::class,'edit'])->name('documentos.edit');
    Route::post('/documentos/update/{id}',[DocumentoController::class,'update'])->name('documentos.update');
    Route::delete('/documentos/delete/{id}',[DocumentoController::class,'delete'])->name('documentos.delete');
    
    
    
    Route::get('/galeriaimagenes',[GaleriaController::class,'index'])->name('galeria');
    Route::post('/galeriaimagenes/store',[GaleriaController::class,'store'])->name('galeria.store');
    Route::get('/galeriaimagenes/{id}/edit',[GaleriaController::class,'edit'])->name('galeria.edit');
    Route::post('/galeriaimagenes/update/{id}',[GaleriaController::class,'update'])->name('galeria.update');
    Route::delete('/galeriaimagenes/delete/{id}',[GaleriaController::class,'delete'])->name('galeria.delete');
    
});
Route::get('/personas',[PersonaController::class,'index'])->name('personas');
Route::get('/personas/create',[PersonaController::class,'create'])->name('personas.create');
Route::post('/personas/store',[PersonaController::class,'store'])->name('personas.store');
Route::get('/personas/{id}/edit',[PersonaController::class,'edit'])->name('personas.edit');
Route::post('/personas/update/{id}',[PersonaController::class,'update'])->name('personas.update');
Route::delete('/personas/delete/{id}',[PersonaController::class,'delete'])->name('personas.delete');
Route::get('/personas/{id}/show',[PersonaController::class,'show'])->name('personas.show');


//Rutas para la solicitud de un voluntario (Formulario de voluntariados)
Route::get('/solicitudesvoluntarios',[PersonaController::class,'VolunteerRequestPendings'])->name('solicitudesVoluntariados.show');
Route::post('/personas/updatearejectstatus/{id}',[PersonaController::class,'updateRejectStatus'])->name('personas.updateStatus');
Route::post('/personas/updateapprovedstatus/{id}',[PersonaController::class,'updateApprovedStatus'])->name('personas.updateStatus');
Route::get('/historialvoluntarios',[PersonaController::class,'VolunteerRejectedandApproved'])->name('historialvoluntarios.index');
Route::post('/solicitud/nuevovoluntario',[VoluntariadoClienteController::class,'storeRequest'])->name('voluntarios.storeRequest');



Route::get('/articulos',[ArticuloController::class,'index'])->name('articulos');
Route::post('/articulos/store',[ArticuloController::class,'store'])->name('articulos.store');
Route::get('/articulos/{id}/edit',[ArticuloController::class,'edit'])->name('articulos.edit');
Route::post('/articulos/update/{id}',[ArticuloController::class,'update'])->name('articulos.update');
Route::delete('/articulos/delete/{id}',[ArticuloController::class,'delete'])->name('articulos.delete');
Route::get('/articulos/{id}/show',[ArticuloController::class,'show'])->name('articulos.show');