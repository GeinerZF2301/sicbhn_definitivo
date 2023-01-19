<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PersonaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('personas', function(){
//     return view('admin.personas.index')->name('personas');
// });


Route::resource('/personas','App\Http\Controllers\Admin\PersonaController')->name('GET','personas');