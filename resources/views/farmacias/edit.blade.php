@extends('layouts.main')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Formulario Edición de Farmacia</h2>
        </div>

        <div class="card-body">
            <form action="{{route('farmacias.update', $farmacia->id)}}" method="post" class="needs-validation" novalidate>
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="validacion01">Razon Social</label>
                    <input type="text" class="form-control" name="razonsocial" value="{{$farmacia->razonsocial}}" id="validacion01" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un nombre.
                        </div>
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">CUFE</label>
                        <input type="number" class="form-control" name="cufe" value="{{$farmacia->cufe}}">
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">CUIT</label>
                        <input type="number" class="form-control" name="cuit" value="{{$farmacia->cuit}}">
                     </div>

                     <div class="form-group col-md-5">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control" name="direccion" value="{{$farmacia->direccion}}">
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">Localidad</label>
                        <input type="text" class="form-control" name="localidad" value="{{$farmacia->localidad}}">
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">Provincia</label>
                        <input type="text" class="form-control" name="provincia" value="{{$farmacia->provincia}}">
                     </div>

                     <div class="form-group col-md-4">
                         <label for="">Encargado Sucursal</label>
                        <input type="text" class="form-control" name="encargado" value="{{$farmacia->encargado}}">
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">Teléfono</label>
                        <input type="number" class="form-control" name="telefono" value="{{$farmacia->telefono}}">
                     </div>

                     <div class="form-group col-md-5">
                         <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$farmacia->email}}">
                     </div>
                </div>

                <button class="btn btn-success" type="submit">Guardar</button>
                <a class="btn btn-danger" href="{{route('farmacias.index')}}">Cancelar</a>

            </form>
        </div>
    </div>

@endsection
