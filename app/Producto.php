<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'codigoproducto',
        'gtin',
        'nombregenerico',
        'presentacion',
        'nombrecomercial',
        'numerocertificado',
        'laboratorio',
        'formafarmaceutica',
        'viaadministracion',
        'condicionexpendio',
        'glnproveedor',
        'tipoproducto',
        'numerotroquel',
        'trazable'

    ];

    public function inventarios(){
        return $this->hasMany('App\Inventario');
    }
}
