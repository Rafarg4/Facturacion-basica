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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('categorias', App\Http\Controllers\CategoriaController::class);

Route::resource('clientes', App\Http\Controllers\ClienteController::class);

Route::resource('proveedors', App\Http\Controllers\ProveedorController::class);

Route::resource('marcas', App\Http\Controllers\MarcaController::class);

Route::resource('productos', App\Http\Controllers\ProductoController::class);

Route::resource('descuentos', App\Http\Controllers\DescuentoController::class);

Route::resource('compras', App\Http\Controllers\CompraController::class);

Route::resource('pagoCompras', App\Http\Controllers\PagoCompraController::class);

Route::resource('ventas', App\Http\Controllers\VentaController::class);