<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class SeccionController extends Controller
{
    //

    public function getSeccion($id){
        return DB::select('call obtener_seccion(?)', array($id));
    }

    public function getProductosSubTiendas(){
        return DB::select('call obtener_productos_sub_tiendas()');
    }
}
