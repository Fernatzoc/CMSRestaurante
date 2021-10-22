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
        'icono',
        'imgFooter',
        'direccion',
        'telefono',
        'facebook',
        'instagram',
        'conocenos',
        'mapa',
        'sobreNosotros',
        'tituloHome',
        'tituloConocenos',
        'tituloMenu',
        'tituloContacto',
        'imagenHome',
        'imgConocenos',
        'imgMenu',
        'imgContacto',
        'openMonday',
        'closeMonday',
        'openTuesday',
        'closeTuesday',
        'openWednesday',
        'closeWednesday',
        'openThursdays',
        'closeThursdays',
        'openFriday',
        'closeFriday',
        'openSaturday',
        'closeSaturday',
        'openSunday',
        'closeSunday',
    ];

}
