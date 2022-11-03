<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cuenta;

class CuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuenta::create([ 
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
