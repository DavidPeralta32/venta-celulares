<?php

use App\Models\Productos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\usersController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Ver productos
Route::get('/productos',[App\Http\Controllers\ProductosController::class,'productos'])->name('productos');

//Detaller del producto
Route::get('/detalle/{id}',[ProductosController::class,'detalleProducto']);

//vista carrito
Route::get('/carrito',[ProductosController::class,'carrito']);

//ruta para agregar producto al carrito
Route::get('/addcarrito/{id}',[ProductosController::class,'agregarCarrito']);

//usuarios
Route::get('/usuarios',[usersController::class,'verUsers']);
//ver un solo usuario
Route::get('/verUsuario/{id}',[usersController::class,'usuario']);
//editar usuario
Route::get('/editUsuario/{id}',[usersController::class,'editUsuario']);
Route::post('/actualizaUsuario',[usersController::class,'actualizaUsuario'])->name('actualiza');