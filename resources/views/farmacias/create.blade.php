@extends('layouts.main')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Formulario Alta de Farmacia</h2>
        </div>

        <div class="card-body">
            <form action="{{route('farmacias.store')}}" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="validacion01">Razon Social</label>
                        <input type="text" class="form-control" name="razonsocial" id="validacion01" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un nombre.
                        </div>
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">CUFE</label>
                        <input type="number" class="form-control" name="cufe" id="validacion02" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                             Por favor, ingrese el CUFE.
                        </div>
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">CUIT</label>
                        <input type="number" class="form-control" name="cuit" id="validacion03" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese el CIUT.
                        </div>
                     </div>

                     <div class="form-group col-md-5">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="validacion04" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese la dirección.
                        </div>
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">Localidad</label>
                        <input type="text" class="form-control" name="localidad" id="validacion05" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese la localidad.
                        </div>
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">Provincia</label>
                        <input type="text" class="form-control" name="provincia" id="validacion06" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese la provincia.
                        </div>
                     </div>

                     <div class="form-group col-md-4">
                         <label for="">Encargado Sucursal</label>
                        <input type="text" class="form-control" name="encargado" id="validacion07" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un encargado de sucursal.
                        </div>
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">Teléfono</label>
                        <input type="number" class="form-control" name="telefono" id="validacion08" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un teléfono de sucursal.
                        </div>
                     </div>

                     <div class="form-group col-md-5">
                         <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="validacion09" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un e-mail valido.
                        </div>
                     </div>
                </div>

                <button class="btn btn-success" type="submit">Guardar</button>
                <button class="btn btn-primary" type="reset">Limpiar</button>
                <a class="btn btn-danger" href="{{route('farmacias.index')}}">Cancelar</a>

            </form>
        </div>
    </div>

@endsection
