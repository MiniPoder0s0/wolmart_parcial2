<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    
    public function run()
    {
        Usuario::create([ 
            'nombre'                =>'Sebastian',
            'correo_electronico'    =>'sebas@gmail.com',
            'edad'                  =>16,
            'sexo'                  => 1,
            'fecha_nacimiento'      =>'2004-12-01',
            'domicilio'             =>'sasadads',
            'telefono'              =>'4777025028',

        ]); 
    }
}

