@extends('layouts.main')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Inventarios Existentes</h2>
    {{-- <a class="btn btn-primary" href="{{route('inventarios.create')}}">Nuevo Invetario</a> --}}
    </div>

    <div class="card-body">
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <tr>
                    <th>Cod. Inv.</th>
                    <th>Cod. Prod.</th>
                    <th>Producto</th>
                    <th>Stock</th>
                    <th>Stock Mínimo</th>
                    <th>Lote</th>
                    <th>Serie</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                    <tr>
                    <td>{{$inventario->id}}</td>
                    <td>{{$inventario->producto->codigoproducto}}</td>
                    <td>{{$inventario->producto->nombregenerico}}</td>
                    <td>{{$inventario->stock}}</td>
                    <td>{{$inventario->stockMinimo}}</td>
                    <td>{{$inventario->lote}}</td>
                    <td>{{$inventario->serie}}</td>
                    <td>{{$inventario->costo}}</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{route('inventarios.edit',$inventario->id)}}" class="btn btn-secondary mr-1"><i class="fa fa-edit"></i> Editar</a>
                        <a href="{{route('inventarios.ver',$inventario->id)}}" class="btn btn-info mr-1"><i class="fas fa-eye"></i></i> Ver</a>
                        <form action="{{route('inventarios.destroy',$inventario->id)}}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button class="btn btn-danger mr-1" type="submit"><i class="fa fa-trash"></i> Eliminar</button>
                        </form>
                    </div>

                    </td>
                    </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection
