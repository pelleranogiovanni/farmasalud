@extends('layouts.main')

@section('content')





    <div class="card">
        <div class="card-header">
            <h2>Lista de Farmacias</h2>
        <a class="btn btn-primary" href="{{route('farmacias.create')}}">Nueva Farmacia</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Farmacia</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($farmacias as $farmacia)
                        <tr>
                        <td>{{$farmacia->id}}</td>
                        <td>{{$farmacia->razonsocial}}</td>
                        <td>{{$farmacia->direccion}}</td>
                        <td>
                        <div class="btn-group">
                            <a href="{{route('farmacias.edit',$farmacia->id)}}" class="btn btn-secondary mr-1"><i class="fa fa-edit"></i> Editar</a>
                            <a href="{{route('farmacias.show',$farmacia->id)}}" class="btn btn-info mr-1"><i class="fas fa-eye"></i></i> Ver</a>
                            <form action="{{route('farmacias.destroy',$farmacia->id)}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger mr-1" type="submit"><i class="fa fa-trash"></i> Eliminar</button>
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
