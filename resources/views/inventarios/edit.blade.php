@extends('layouts.main')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Alta Inventario de: {{$producto->nombregenerico}}</h2>
        </div>

        <div class="card-body">
            <form action="{{route('inventarios.store')}}" method="POST" class="needs-validation" novalidate>
                @csrf

            <input type="text" name="id_producto" value="{{$producto->id}}" hidden>

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="validacion01">Lote</label>
                        <input type="text" class="form-control" name="lote" id="validacion01" required value="{{old('codigoproducto')}}">
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un lote.
                        </div>
                    </div>



                    <div class="form-group col-md-3">
                        <label for="validacion02">N° Serie</label>
                        <input type="text" class="form-control" name="serie" id="validacion02" required value="{{old('seire')}}">
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un N° de Serie.
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="validacion03">Vencimiento</label>
                        <input type="text" class="form-control" name="vencimiento" id="validacion03" required value="{{old('vencimiento')}}">
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese una fecha de vencimiento.
                         </div>
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="validacion04">Stock</label>
                        <input type="text" class="form-control" name="stock" id="validacion04" required value="{{old('stockMinimo')}}">
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese el stock actual.
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="validacion04">Stock Mínimo</label>
                        <input type="text" class="form-control" name="stockMinimo" id="validacion05" required value="{{old('stockMinimo')}}">
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese unstock mínimo.
                        </div>
                    </div>



                        <div class="form-group col-md-3">
                            <label for="validacion05">Precio Costo</label>
                            <input type="text" class="form-control" name="costo" id="validacion06" required value="{{old('costo')}}">
                            <div class="valid-feedback">
                                ¡Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, ingrese precio de costo.
                            </div>
                        </div>

                </div>

                <button class="btn btn-success" type="submit">Guardar</button>
                <button class="btn btn-primary" type="reset">Limpiar</button>
                <a class="btn btn-danger" href="{{route('productos.index')}}">Cancelar</a>

        </div>
    </div>


@endsection
