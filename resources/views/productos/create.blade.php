@extends('layouts.main')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Alta de Producto</h2>
        </div>

        <div class="card-body">
            <form action="{{route('productos.store')}}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="validacion01">Código Producto</label>
                    <input type="text" class="form-control" name="codigoproducto" id="validacion01" required value="{{old('codigoproducto')}}">
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un código.
                        </div>
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">Nombre Genérico</label>
                        <input type="text" class="form-control" name="nombregenerico" id="validacion02" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                             Por favor, ingrese un nombre genérico.
                        </div>
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">Nombre Comercial</label>
                        <input type="text" class="form-control" name="nombrecomercial" id="validacion03" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un nombre comercial.
                        </div>
                     </div>

                     <div class="form-group col-md-5">
                        <label for="">Laboratorio</label>
                        <input type="text" class="form-control" name="laboratorio" id="validacion04" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un laboratorio.
                        </div>
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">N° de Certificado</label>
                        <input type="number" class="form-control" name="numerocertificado" id="validacion05" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un número de certificado.
                        </div>
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">GTIN</label>
                        <input type="number" class="form-control" name="gtin" id="validacion06" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese número de GETIN.
                        </div>
                     </div>

                     <div class="form-group col-md-4">
                         <label for="">Forma Farmacéutica</label>
                        <input type="text" class="form-control" name="formafarmaceutica" id="validacion07" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese la forma farmacéutica.
                        </div>
                     </div>

                     <div class="form-group col-md-4">
                        <label for="">N° de Troquel</label>
                        <input type="number" class="form-control" name="numerotroquel" id="validacion08" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese número de troquel.
                        </div>
                     </div>

                     <div class="form-group col-md-4">
                         <label for="">Vía de Administración</label>
                        <input type="text" class="form-control" name="viaadministracion" id="validacion09" required>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese la vía de administración.
                        </div>
                     </div>

                     <div class="form-group col-md-3">
                        <label for="">Condición de Expendio</label>
                        <select class="form-control" name="condicionexpendio"  id="validacion10" required>
                                <option value="">Seleccionar una opción</option>
                                <option value="Venta Libre">Venta Libre</option>
                                <option value="Bajo Receta">Bajo Receta</option>
                        </select>
                        <div class="valid-feedback">
                            ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                           Por favor, seleccione condición de expendio.
                        </div>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Presentación</label>
                        <input type="text" class="form-control" name="presentacion" id="validacion11" required>
                        <div class="valid-feedback">
                             ¡Correcto!
                        </div>
                        <div class="invalid-feedback">
                           Por favor, ingrese la presentación.
                         </div>
                    </div>

                    <div class="form-group col-md-4">
                          <label for="">GLN Proveedor</label>
                          <input type="number" class="form-control" name="glnproveedor" id="validacion12" required>
                          <div class="valid-feedback">
                               ¡Correcto!
                          </div>
                         <div class="invalid-feedback">
                            Por favor, ingrese GLN del proveedor.
                          </div>
                     </div>

                     {{-- <div class="form-group col-md-3">
                            <label for="">Medicamento Trazable</label>
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="trazable">
                                 <label class="form-check-label" for="defaultCheck1">
                                   Si
                                </label>
                            </div>
                       </div> --}}
                       <div class="form-group col-md-3">
                            <label for="">Medicamento Trazable</label>
                            <select class="form-control" name="trazable" id="validacion13" required>
                                    <option value="">Seleccionar una opción</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                            </select>
                            <div class="valid-feedback">
                                ¡Correcto!
                            </div>
                            <div class="invalid-feedback">
                               Por favor, seleccione si es trazable.
                            </div>
                        </div>

                       <div class="form-group col-md-3">
                            <label for="">Tipo de Producto</label>
                            <select class="form-control" name="tipoproducto" id="validacion14" required>
                                    <option value="">Seleccionar una opción</option>
                                    <option value="1">01 - Medicamento</option>
                                    <option value="2">02 - Perfumería</option>
                            </select>
                            <div class="valid-feedback">
                                ¡Correcto!
                            </div>
                            <div class="invalid-feedback">
                               Por favor, seleccione tipo de producto.
                            </div>
                        </div>

                </div>

                <button class="btn btn-success" type="submit">Guardar</button>
                <button class="btn btn-primary" type="reset">Limpiar</button>
                <a class="btn btn-danger" href="{{route('productos.index')}}">Cancelar</a>

            </form>
        </div>
    </div>

@endsection
