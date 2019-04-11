<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Inventario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInventario;

class InventariosController extends Controller
{

    public function index(){

        $inventarios = Inventario::all();
        return $inventarios->producto;
        return view('inventarios.index', compact('inventarios'));
    }

    public function create($id){
        $producto = Producto::find($id);

        return view('inventarios.create', compact('producto'));
    }

    public function store(StoreInventario $request){

        $inventario = Inventario::create($request->all());

        return redirect()->route('productos.index');

    }

}
