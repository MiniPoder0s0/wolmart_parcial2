<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    function consultar(){
        

        $productos = Producto::paginate(3);
        
        return view('producto.productos', compact('productos'));
    }
}
