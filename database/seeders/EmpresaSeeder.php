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
            'icono' => 'img',
            'imgFooter' => 'img',
            'direccion' => 'San Marcos',
            'telefono' => '58745896',
            'facebook' => 'https:://facebook.com/test',
            'instagram' => 'https:://instagram.com/test',
            'conocenos' => 'Texto Historia',
            'mapa' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19869.00031624347!2d-0.130197!3d51.501748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4291f3172409ea92!2sOjo%20de%20Londres!5e0!3m2!1ses-419!2sus!4v1630741898520!5m2!1ses-419!2sus',
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
