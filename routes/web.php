<?php

use App\Models\Productos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdministradorController;

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

//Ver productos en venta
Route::get('/productos',[App\Http\Controllers\ProductosController::class,'productos'])->name('productos');
//Detaller del producto
Route::get('/detalle/{id}',[ProductosController::class,'detalleProducto']);
//crud productos
Route::get('/listProducto',[ProductosController::class,'showProductos']);
//crear producto
Route::get('/crearProducto',[ProductosController::class,'crearProducto']);
//insertar producto
Route::post('/insertarProducto',[ProductosController::class,'insertarProducto'])->name('insertar.producto');
//ver producto seleccionado
Route::get('/verProducto/{id}',[ProductosController::class,'verProducto']);
//vista para editar producto
Route::get('/editarProducto/{id}',[ProductosController::class,'editarProducto']);
//actualizar el producto
Route::post('/actualizarProducto',[ProductosController::class,'actualizarProducto'])->name('actualizar.producto');
//eliminar producto
Route::get('/eliminarProducto/{id}',[ProductosController::class,'eliminarProducto']);


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
//Eliminar usuario
Route::get('/delUsuario/{id}',[usersController::class,'eliminarUsuario']);

//Administrador
Route::get('/administrador',[AdministradorController::class,'index']);
//iniciar sesion admin
Route::get('/loginAdmin',[AdministradorController::class,'loginAdmin']);
Route::post('/sesionAdmin',[AdministradorController::class,'sesionAdmin'])->name('sesion.admin');

//comprar producto
Route::get('/comprarProducto/{id}',[ProductosController::class,'comprarProducto'])->name('comprar.producto');


//Mail
Route::get('/compraformulario/{id}',[MailController::class,'formularioCompra']);
Route::post('/compraProducto',[MailController::class,'compraProducto'])->name('compra.producto');
Route::get('/mandarCorreo',[MailController::class,'mandarCorreo']);
