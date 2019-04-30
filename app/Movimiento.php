<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $fillable = [
        'tipo',
        'cantidad',
        'id_inventario'
    ];

    public function inventario(){
        return $this->belongsTo('App\Inventario', 'id_inventario');
    }

}
