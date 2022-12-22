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

        session_start();

        $usua = $request->input("email");
        $clav = $request->input("contra");

        $usuarios = $this->getClientes();
        
        foreach ($usuarios as $u) {
            if($u["email"] == $usua && $u["contra"] == $clav){
                $_SESSION['dni'] = $u['dni'];
                return "OK";
            }
        }

        return "Email y/o Contraseña incorrecta";
    }

    public function insertarCliente(Request $request){
        
        $dni = $request->input("dni"); #Nuevo
        $usua = $request->input("email");
        $clav = $request->input("contra");
        $verClav = $request->input("verificarClave");
        $celular = $request->input("celular");
        $sApellido = $request->input("sApellido");
        $pApellido = $request->input("pApellido");
        $nombre = $request->input("nombre");
        $fecha = $request->input("fecha");
        $genero = $request->input("genero");

        if($clav==$verClav){
            
            DB::table('cliente')->insert(
                array(
                   'dni' => $dni,
                   'fecha_nac' => $fecha,
                   'nombre' => $nombre,
                   'prim_apel' => $pApellido,
                   'seg_apel' => $sApellido,
                   'genero' => $genero,
                   'telefono' => $celular,
                   'email' => $usua,
                   'contra' => $clav

                )
            );
            $message = "<center><img src='/img/checkP.png' alt='check' id='check' width='200px'></center>"
            ."<h1>¡Ya estás afiliado a supermercado APROBADO!</h1>"
            ."<p class='plb_plomo'>Desde ahora ingresa con tu EMAIL y contraseña recién creados.</p>"
            ."<a href='/login'><button type='button' class='sigPaso'>Ingresar</button></a>";

        }
        else {
            $message = "<h1><center>Las contraseñas no son iguales</center></h1>"
            ."<center><img src='/img/errorP.png' alt='error' id='error' width='200px'></center>"
            ."<center><a href='/login'><button type='button' class='sigPaso'>Regresar al Login</button></a></center>";
        }

        return view('/registrar', array('message' => $message));
    }

}

