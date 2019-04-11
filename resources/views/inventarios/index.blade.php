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
                    @foreach ($inventarios as $inventario)
                        <tr>
                        <td>{{$inventario->id}}</td>
                        <td>{{$inventario->producto->nombrecomercial}}</td>
                        {{-- <td>{{$producto->nombregenerico}}</td> --}}
                        <td>{{$inventario->stockMinimo}}</td>
                        <td>{{$inventario->stockMinimo}}</td>
                        <td>{{$inventario->lote}}</td>
                        <td>{{$inventario->serie}}</td>
                        <td>{{$inventario->costo}}</td>
                        <td>
                        {{-- <div class="btn-group">
                            <a href="{{route('farmacias.edit',$farmacia->id)}}" class="btn btn-secondary mr-1"><i class="fa fa-edit"></i> Editar</a>
                            <a href="{{route('farmacias.show',$farmacia->id)}}" class="btn btn-info mr-1"><i class="fas fa-eye"></i></i> Ver</a>
                            <form action="{{route('farmacias.destroy',$farmacia->id)}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger mr-1" type="submit"><i class="fa fa-trash"></i> Eliminar</button>
                            </form>
                        </div> --}}
                        {{-- <div class="row">
                        <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-primary btn-circle mr-1 ml-2"><i class="fa fa-edit"></i></a>
                        <a href="{{route('inventarios.create',$producto->id)}}" class="btn btn-success btn-circle mr-1 ml-2"><i class="fa fa-edit"></i></a>
                        <a href="{{route('productos.show',$producto->id)}}" class="btn btn-info btn-circle mr-1"><i class="fa fa-eye"></i></a>

                        <form action="{{route('productos.destroy',$producto->id)}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-danger btn-circle mr-1"><i class="fa fa-trash"></i></button>
                            </form>
                        </div> --}}
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection

