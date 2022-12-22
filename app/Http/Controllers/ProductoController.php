<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    public function getProductos(){
        return DB::select('call obtener_productos');
    }

    public function getProductoById($id){
        return DB::select('call obtener_un_producto(?)', array($id));
    }

    public function postProducto(Request $request){
        $producto = array(
            'id_producto' => $request->input('id'),
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
            'id_seccion' => $request->input('id_seccion')
        );
            
        Producto::insert($producto);
    }

    public function venderProducto(Request $request){
        $id = $request->input('id');
        $cantidad = $request->input('cantidad');

        $producto = $this->getProductoById($id)[0];
        if($producto->cantidad - $cantidad >= 0){
            DB::select('call vender_producto(?,?)', array($id, $cantidad));
        }
    }
}
