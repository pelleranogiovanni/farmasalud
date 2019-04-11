@extends('layouts.main')

@section('content')



    <div class="card">
        <div class="card-header">
            <h2>Productos Existentes</h2>
        <a class="btn btn-primary" href="{{route('productos.create')}}">Nuevo Producto</a>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Cod. Prod.</th>
                        <th>Nombre Comercial</th>
                        <th>Tipo</th>
                        <th>Forma Farmacéutica</th>
                        <th>Vía Administración</th>
                        <th>Condición Expendio</th>
                        <th>Presentación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                        <td>{{$producto->codigoproducto}}</td>
                        <td>{{$producto->nombrecomercial}}</td>
                        <td>
                            @if($producto->tipoproducto == 1)
                            Medicamento
                            @else
                            Perfumería

                        @endif
                        </td>

                        <td>{{$producto->formafarmaceutica}}</td>
                        <td>{{$producto->viaadministracion}}</td>
                        <td>{{$producto->condicionexpendio}}</td>
                        <td>{{$producto->presentacion}}</td>
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
                        <div class="row">
                        <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-primary btn-circle mr-1 ml-2"><i class="fa fa-edit"></i></a>
                        <a href="{{route('inventarios.create',$producto->id)}}" class="btn btn-success btn-circle mr-1"><i class="fa fa-edit"></i></a>
                        <a href="{{route('productos.show',$producto->id)}}" class="btn btn-info btn-circle mr-1"><i class="fa fa-eye"></i></a>

                        <form action="{{route('productos.destroy',$producto->id)}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-danger btn-circle mr-1"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection
