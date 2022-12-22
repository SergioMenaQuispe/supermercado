<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\CarritoController;

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
    return view('main');
});

Route::get('/frutas_y_verduras', function() {
    $json = SeccionController::getSeccion(5501);
    return view('frutas_y_verduras', array("json" => $json));
});

Route::get('/panaderia_y_pasteleria', function() {
    $json = SeccionController::getSeccion(5504);
    return view('panaderia_y_pasteleria', array("json" => $json));
});

Route::get('/carnes', function() {
    $json = SeccionController::getSeccion(5508);
    return view('carnes', array("json" => $json));
});

Route::get('/muebles', function() {
    $json = SeccionController::getSeccion(5512);
    return view('muebles', array("json" => $json));
});

Route::get('/tecnologia', function() {
    $json = SeccionController::getProductosSubTiendas();
    return view('tecnologia', array("json" => $json));
});

Route::get('/carrito', function() {
    $json = CarritoController::getCarrito();
    return view('carrito', array("json" => $json));
});

# login
Route::get('/login', function() {
    return view('login');
});

# crear cuenta
Route::get('/registro_crear_cuenta', function() {
    return view('registro_crear_cuenta');
});

# recuperar *
Route::get('/recuperar', function() {
    return view('recuperar');
});

?>