<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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
    return view('welcome');
});


// Ruta directa a la vista Blade
Route::get('/productos', function () {
    return view('productos.index'); // Asegúrate de que exista la vista en resources/views/productos/index.blade.php
});

// Ruta con un controlador
Route::get('/productos', [ProductoController::class, 'index']);