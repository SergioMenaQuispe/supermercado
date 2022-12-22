<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function getClientes(){
        return Cliente::all();
    }

    public function validarCliente(Request $request){

        $usua = $request->input("email");
        $clav = $request->input("contra");

        $usuarios = $this->getClientes();
        
        foreach ($usuarios as $u) {
            if($u["email"] == $usua && $u["contra"] == $clav){
                echo "OK";
                return;
            }
        }
        echo "Email y/o Contraseña incorrecta";
    }

}

