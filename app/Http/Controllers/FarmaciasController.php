<?php

namespace App\Http\Controllers;
use App\Farmacia;

use App\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFarmacia;
use App\Http\Requests\UpdateFarmacia;

class FarmaciasController extends Controller
{
    public function index(){

        $farmacias = Farmacia::all();

        return view('farmacias.index',compact('farmacias'));
    }

    public function create(){
        return view('farmacias.create');
    }

    public function store(StoreFarmacia $request){

        Farmacia::create($request->all());

        return redirect()->route('farmacias.index');

    }

    public function edit($id){

        $farmacia = Farmacia::find($id);

        return view('farmacias.edit', compact('farmacia'));
    }

    public function update(UpdateFarmacia $request, $id){

        $farmacia = Farmacia::find($id);

        $farmacia->update($request->all());

        return redirect()->route('farmacias.index');

    }

    public function destroy($id){

        $farmacia = Farmacia::find($id);
        $farmacia->delete();
        return redirect()->route('farmacias.index');

    }

    public function show($id){

        $farmacia = Farmacia::find($id);
        return view('farmacias.show', compact('farmacia'));


    }
}
