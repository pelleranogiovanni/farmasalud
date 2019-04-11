<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
   
    protected $fillable = [
        'cufe',
        'razonsocial',
        'cuit',
        'encargado',
        'direccion',
        'telefono',
        'localidad',
        'provincia',
        'email'
    ];
}
