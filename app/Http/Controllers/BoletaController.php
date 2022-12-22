<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class BoletaController extends Controller
{
    //

    public function vender(Request $request){

        DB::select('call crear_boleta(?,?,?,?,?)', 
            array(
                $request->input('id_cliente'),
                $request->input('id_producto'),
                $request->input('descripcion'),
                $request->input('monto'),
                $request->input('cantidad')
            )
        );

        return $request->input('id_cliente');
    }
}
