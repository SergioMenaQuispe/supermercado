<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// productos

# obtener todos los productos
Route::get('/producto', 'ProductoController@getProductos');

# obtener un producto por id
Route::get('/producto/{id}', 'ProductoController@getProductoById');

# crear nuevo producto
Route::post('/producto', 'ProductoController@postProducto');

# vender un producto
Route::post('/producto/vender/', 'ProductoController@venderProducto');

# vender un producto creando una boleta
Route::post('/venta', 'BoletaController@vender');

# obtener una seccion
Route::get('/seccion/{id}', 'SeccionController@getSeccion');

# obtener productos de las subtiendas
Route::get('/subtiendas', 'SeccionController@getProductosSubTiendas');

# sumar un producto al carrito
Route::post('/carrito', 'CarritoController@newProductoCarrito');

# obtener los productos agregados al carrito
Route::get('/carrito', 'CarritoController@getCarrito');

# borrar un producto del carrito
Route::delete('/carrito/{id}', 'CarritoController@deleteProductoCarrito');

# obtener todos los clientes
Route::get('/cliente', 'ClienteController@getClientes');

# validar que existe
Route::post('/cliente', 'ClienteController@validarCliente');

# api de registro
Route::post('/registrar', 'ClienteController@insertarCliente');