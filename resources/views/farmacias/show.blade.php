@extends('layouts.main')

@section('content')

    <div class="card">
        <div class="card-header">
        <h2>Sucursal: {{$farmacia->razonsocial}}</h2>
        </div>

        <div class="card-body">
            <form action="{{route('farmacias.update', $farmacia->id)}}" method="post" class="needs-validation" novalidate>
                @csrf
                @method('PUT')

                <div class="row">

                     <div class="form-group col-md-2">
                        <label for="">CUFE</label>
                        <input type="number" class="form-control-plaintext" name="cufe" value="{{$farmacia->cufe}}" readonly>
                     </div>

                     <div class="form-group col-md-2">
                        <label for="">CUIT</label>
                        <input type="number" class="form-control-plaintext" name="cufe" value="{{$farmacia->cuit}}" readonly>
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control-plaintext" name="direccion" value="{{$farmacia->direccion}}" readonly>
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">Localidad</label>
                        <input type="text" class="form-control-plaintext" name="localidad" value="{{$farmacia->localidad}}" readonly>
                     </div>

                     <div class="form-group col-md-2">
                        <label for="">Provincia</label>
                        <input type="text" class="form-control-plaintext" name="provincia" value="{{$farmacia->provincia}}" readonly>
                     </div>

                     <div class="form-group col-md-3">
                         <label for="">Encargado Sucursal</label>
                        <input type="text" class="form-control-plaintext" name="encargado" value="{{$farmacia->encargado}}" readonly>
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">Teléfono</label>
                        <input type="number" class="form-control-plaintext" name="telefono" value="{{$farmacia->telefono}}" readonly>
                     </div>

                     <div class="form-group col-md-4">
                         <label for="">Email</label>
                        <input type="text" class="form-control-plaintext" name="email" value="{{$farmacia->email}}" readonly>
                     </div>
                </div>

                <a class="btn btn-primary" href="{{route('farmacias.index')}}">Volver</a>

            </form>
        </div>
    </div>

@endsection
