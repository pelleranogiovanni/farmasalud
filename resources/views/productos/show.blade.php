@extends('layouts.main')

@section('content')

    <div class="card">
        <div class="card-header">
        <h2>Producto de
            @if($producto->tipoproducto == 1)
            Medicamento:
            @else
            Perfumería:
            @endif
            {{$producto->nombregenerico}} </h2>
        </div>

        <div class="card-body">
            <form action="{{route('productos.store')}}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="validacion01">Código Producto</label>
                    <input type="text" class="form-control-plaintext" name="codigoproducto"   value="{{$producto->codigoproducto}}">
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">Nombre Genérico</label>
                     <input type="text" class="form-control-plaintext" name="nombregenerico" value="{{$producto->nombregenerico}}">
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">Nombre Comercial</label>
                        <input type="text" class="form-control-plaintext" name="nombrecomercial" value="{{$producto->nombrecomercial}}">
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">Laboratorio</label>
                        <input type="text" class="form-control-plaintext" name="laboratorio" value="{{$producto->laboratorio}}">
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">N° de Certificado</label>
                        <input type="number" class="form-control-plaintext" name="numerocertificado" value="{{$producto->numerocertificado}}">
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">GTIN</label>
                        <input type="number" class="form-control-plaintext" name="gtin" value="{{$producto->gtin}}">
                     </div>

                     <div class="form-group col-md-4">
                         <label for="">Forma Farmacéutica</label>
                        <input type="text" class="form-control-plaintext" name="formafarmaceutica" value="{{$producto->formafarmaceutica}}">
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">N° de Troquel</label>
                        <input type="number" class="form-control-plaintext" name="numerotroquel" value="{{$producto->numerotroquel}}">
                     </div>

                     <div class="form-group col-md-4">
                         <label for="">Vía de Administración</label>
                        <input type="text" class="form-control-plaintext" name="viaadministracion" value="{{$producto->viaadministracion}}">
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">Condición de Expendio</label>
                        <input type="text" class="form-control-plaintext" name="condicionexpendio" value="{{$producto->condicionexpendio}}">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="">Presentación</label>
                        <input type="text" class="form-control-plaintext" name="presentacion" value="{{$producto->presentacion}}">
                    </div>

                    <div class="form-group col-md-3">
                          <label for="">GLN Proveedor</label>
                          <input type="number" class="form-control-plaintext" name="glnproveedor" value="{{$producto->glnproveedor}}">
                     </div>


                       <div class="form-group col-md-2">
                            <label for="">Trazable</label>
                            @if($producto->trazable == 1)
                            <input type="text" class="form-control-plaintext" name="trazable" value="Trazable">
                            @else
                            <input type="text" class="form-control-plaintext" name="trazable" value="No Trazable">
                            @endif

                        </div>

                </div>

                <a class="btn btn-primary" href="{{route('productos.index')}}">Volver</a>

            </form>
        </div>
    </div>

@endsection
