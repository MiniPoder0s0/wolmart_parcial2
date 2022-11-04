<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    function registrar(){
        return view('usuario.registrar');
    }

    function guardar(Request $datos){
        $usuario = Usuario::create($datos->post());

        return redirect('/usuario/detalle/'.$usuario->id);
    }
    function detalle($id){
        $usuario = Usuario::find($id);

        return view('usuario.cuenta', compact('usuario'));
    }
}
