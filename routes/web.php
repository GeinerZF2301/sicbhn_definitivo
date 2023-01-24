<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PersonaController;
use App\Http\Controllers\Admin\TipoPersonaController;


//AQUI VAN LAS RUTAS DE VISTAS
Route::get('/', function () {
    return view('welcome');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/personas','App\Http\Controllers\Admin\PersonaController')->name('GET','personas');
Route::resource('/tipospersonas','App\Http\Controllers\Admin\TipoPersonaController')->name('GET','tipospersonas');
Route::get('/admin', function () {
    return view('layouts.admin');
});
