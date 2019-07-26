<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProducto;

class ProductosController extends Controller
{

    public function index (){

        // $productos = Producto::all();
        $productos = Producto::orderBy('nombrecomercial', 'DESC')->paginate(10);
        return view('productos.index', compact('productos'));

    }

    public function create(){
        return view('productos.create');

    }

    public function store(StoreProducto $request){


        $producto = Producto::create($request->all());

        return redirect()->route('productos.index');


    }


    public function edit($id){

        $producto = Producto::find($id);

        return view('productos.edit', compact('producto'));
    }

    public function destroy($id){

        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('productos.index');

    }


    public function show($id){
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));
    }


}
