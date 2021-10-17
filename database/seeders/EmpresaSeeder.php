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
            'logo' => 'img',
            'direccion' => 'San Marcos',
            'telefono' => '58745896',
            'facebook' => 'https:://facebook.com/test',
            'instagram' => 'https:://instagram.com/test',
            'conocenos' => 'Texto Historia',
            'sobreNosotros' => 'Sobre Nosotros',
            'tituloHome' => 'Titulo Home',
            'tituloConocenos' => 'Titulo Conocenos',
            'tituloMenu' => 'Titulo Menu',
            'tituloContacto' => 'Titulo Contacto',
            'imagenHome' => 'img',
            'imgConocenos' => 'img',
            'imgMenu' => 'img',
            'imgContacto' => 'img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('horarios')->insert([
            'day' => 1,
            'open_time' => '8:10:15',
            'close_time' => '11:20:30',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('horarios')->insert([
            'day' => 2,
            'open_time' => '8:10:15',
            'close_time' => '11:20:30',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('horarios')->insert([
            'day' => 3,
            'open_time' => '8:10:15',
            'close_time' => '11:20:30',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('horarios')->insert([
            'day' => 4,
            'open_time' => '8:10:15',
            'close_time' => '11:20:30',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('horarios')->insert([
            'day' => 5,
            'open_time' => '8:10:15',
            'close_time' => '11:20:30',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('horarios')->insert([
            'day' => 6,
            'open_time' => '8:10:15',
            'close_time' => '11:20:30',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('horarios')->insert([
            'day' => 7,
            'open_time' => '8:10:15',
            'close_time' => '11:20:30',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    
    }
}
