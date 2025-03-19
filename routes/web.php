<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login.login');
});


// Ruta directa a la vista Blade
//Route::get('/productos', function () {
//    return view('productos.index'); // Asegúrate de que exista la vista en resources/views/productos/index.blade.php
//});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin.home');

Route::get('/user/home', function () {
    return view('user.home');
})->name('user.home');

// Ruta con un controlador
Route::get('/productos', [ProductoController::class, 'index']);