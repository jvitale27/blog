<?php

use Illuminate\Support\Facades\Route;

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
})->name('home');

//para ver la pagina de componentes de Blade
Route::get('/componentes', function () {
    return view('welcome-componentes');
});

//verifico si esta logueado con el middleware 'auth', sino no le muestra /dashboard y lo redirige a login
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//verifico si esta logueado con el middleware 'auth' y luego autorizado con el middleware 'age'
Route::get('prueba', function() {
    return "Ha accedido correctamente a esta ruta";
})->middleware(['auth:sanctum','age']);

Route::get('no-autorizado', function() {
    return "Usted no esta autorizado";
});
