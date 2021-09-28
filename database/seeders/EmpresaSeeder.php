<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('empresas')->insert([
            'nombreEmpresa' => 'Lyla Cafe',
            'direccion' => 'San Marcos',
            'telefono' => '58745896',
            'facebook' => 'https:://facebook.com/test',
            'instagram' => 'https:://instagram.com/test',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    
    }
}
