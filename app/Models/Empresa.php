<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombreEmpresa',
        'logo',
        'direccion',
        'telefono',
        'facebook',
        'instagram',
        'conocenos',
        'sobreNosotros',
        'tituloHome',
        'tituloConocenos',
        'tituloMenu',
        'tituloContacto',
        'imagenHome',
        'imgConocenos',
        'imgMenu',
        'imgContacto',
    ];

}
