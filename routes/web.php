<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productosControllers;

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


Route::get('/login', function () {
    return view('login');
})->name('login.login');
Route::get('/cerrarSesion', [loginController::class, 'cerrarSesion'])->name("login.cerrarSesion");

Route::get('/register', function () {
    return view('register');
})->name('register.register');

Route::post("/register", [loginController::class, "crearUsuario"])->name("register.crearUsuario");

Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name("dashboard.dashboard");

Route::get('/Obtener/{producto}', [productosControllers::class, 'getAll']);

Route::get('/Obtener/{producto}/barrio/{barrio}', [productosControllers::class, 'getByBarrio']);

Route::get('/Obtener/{producto}/comuna/{comuna}', [productosControllers::class, 'getByComuna']);

Route::get('/Insertar/{producto}', [productosControllers::class, 'insertar']);

Route::post('/Insertar/{producto}', [productosControllers::class, 'insertarServer']);

Route::post('/login', [loginController::class, 'intoLogin'])->name("login.logearme");
