<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar registros a latabla
        DB::table('clientes')->insert([
            [
                'nombres'=> 'Luis Miguel',
                'apellidos'=> 'Quispe Toribio',
                'direccion'=> 'Av. Santa Cruz',
                'nit'=> '3597841',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombres'=> 'Juan Gabriel',
                'apellidos'=> 'Tola Macabrio',
                'direccion'=> 'Av. Montero',
                'nit'=> '3987412',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
            ]);
    }
}
