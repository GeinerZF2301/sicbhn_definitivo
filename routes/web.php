<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/admin', function () {
    return view('layouts.admin');
});