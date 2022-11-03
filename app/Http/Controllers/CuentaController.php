<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    
    function registrar(){
        return view('usuario.cuenta', compact('cuentas'));
    }
}
