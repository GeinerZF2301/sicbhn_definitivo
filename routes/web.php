<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PersonaController;
use App\Http\Controllers\Admin\TipoPersonaController;
use App\Http\Controllers\Admin\CampañaController;
use App\Http\Controllers\Admin\VoluntariadoController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\DocumentoController;


//AQUI VAN LAS RUTAS DE VISTAS

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/campanna', function () {
    return view('principal/campanna.campanna-index');
});

Route::get('/contactos', function () {
    return view('principal/contactos.contactos-index');
});

Route::get('/documentos', function () {
    return view('principal/documentos.documentos-index');
});

Route::get('/donaciones', function () {
    return view('principal/donaciones.donaciones-index');
});

Route::get('/galeria', function () {
    return view('principal/galeria.galeria-index');
});

Route::get('/horavisita', function () {
    return view('principal/horavisita.horavisita-index');
});

Route::get('/sobrenosotros', function () {
    return view('principal/sobrenosotros.sobrenosotros-index');
});
Route::get('/voluntariado', function () {
    return view('principal/voluntariado.voluntariado-index');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// PRUEBAS AK7
Route::get('/tiposvoluntarios', function () {
    return view('admin/tiposvoluntarios.index');
});
Route::get('/gestionvoluntarios', function () {
    return view('admin/gestionvoluntarios.index');
});
Route::get('/admin', function () {
    return view('layouts.admin');
});



// Rutas para el modulo de Tipos de Persona
Route::get('/tipospersonas',[TipoPersonaController::class,'index'])->name('tipospersonas');
Route::post('/tipospersonas/store',[TipoPersonaController::class,'store'])->name('tipospersonas.store');
Route::get('/tipospersonas/{id}/edit',[TipoPersonaController::class,'edit'])->name('tipospersonas.edit');
Route::post('/tipospersonas/update/{id}',[TipoPersonaController::class,'update'])->name('tipospersonas.update');
Route::delete('/tipospersonas/delete/{id}',[TipoPersonaController::class,'delete'])->name('tipospersonas.delete');
Route::get('/tipospersonas/{id}/show',[TipoPersonaController::class,'show'])->name('tipospersonas.show');

//Rutas para el modulo de Personas
Route::get('/personas',[PersonaController::class,'index'])->name('personas');
Route::get('/personas/create',[PersonaController::class,'create'])->name('personas.create');
Route::post('/personas/store',[PersonaController::class,'store'])->name('personas.store');
Route::get('/personas/{id}/edit',[PersonaController::class,'edit'])->name('personas.edit');
Route::post('/personas/update/{id}',[PersonaController::class,'update'])->name('personas.update');
Route::delete('/personas/delete/{id}',[PersonaController::class,'delete'])->name('personas.delete');
Route::get('/personas/{id}/show',[PersonaController::class,'show'])->name('personas.show');

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


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
});
