<?php

namespace App;
use App\Producto;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
        'lote',
        'serie',
        'vencimiento',
        'stockMinimo',
        'costo',
        'id_producto'
    ];

public function producto(){
    return $this->belongsTo('App\Producto', 'id_producto');
}

}
