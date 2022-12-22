<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Carrito;

class CarritoController extends Controller
{
    //
    public function getCarrito(){
        return DB::select('call obtener_productos_carrito()');
    }

    public function newProductoCarrito(Request $request){
        DB::table('carrito')->insert(array(
            'id_producto' => $request->input('id'),
            'cantidad' => 1
        ));
    }

    public function deleteProductoCarrito($id){
        DB::delete('DELETE FROM carrito WHERE id_producto = ?', array($id));
    }
}
