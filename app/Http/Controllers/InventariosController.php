<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Inventario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInventario;

class InventariosController extends Controller
{

    public function index(){

        // $inventarios = Inventario::all();

        // return view('inventarios.index', compact('inventarios'));
    }

    public function show($id){
        $inventarios = Inventario::where('id_producto', $id)->get();
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

    public function edit($id){
        $inventario = Inventario::find($id);
        return view('inventario.edit', compact('inventario'));
    }

    public function ver($id){
        $inventario = Inventario::find($id);

        return view('inventarios.show', compact('inventario'));
    }

}
