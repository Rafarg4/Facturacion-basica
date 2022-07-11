<!-- Id Usuario Field -->
<div class="form-group col-md-6 pull-left">
<label for="id_usuario">Vendedor:</label>
            <input type="text" name="id_usuario" class="form-control" value="{{ Auth::user()->name }}" readonly>
        </div>
<!-- Proveedor Id Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('proveedor_id', 'Proveedor:') !!}
    {!! Form::select('proveedor_id', $proveedors,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>
<!-- Producto Id Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('id_producto', 'Producto:') !!}
    {!! Form::select('id_producto', $productos,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>
<!-- Tipo Compra Field -->
<div class="form-group col-sm-2 pull-left ">
    {!! Form::label('tipo_compra', 'tipo compra:') !!}
   {!! Form::select('tipo_compra',array('Sin eleccion' => 'Sin eleccion','Contado' => 'Contado', 'Credito' => 'Credito'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Timbrando Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('timbrado', 'Timbrado:') !!}
    {!! Form::text('timbrado', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Comprobante Field -->
<div class="form-group col-sm-2 pull-left ">
    {!! Form::label('tipo_comprobante', 'Tipo de comprobante:') !!}
   {!! Form::select('tipo_comprobante',array('Sin eleccion' => 'Sin eleccion','Tiket' => 'Tiket', 'Factura' => 'Factura'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>


<!-- Numero Factura Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('numero_factura', 'Numero Factura:') !!}
    {!! Form::text('numero_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::text('fecha_inicio', null, ['class' => 'form-control','id'=>'fecha_inicio']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_inicio').datetimepicker({
               format: 'YYYY-MM-DD',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Fecha Factura Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('fecha_factura', 'Fecha Factura:') !!}
    {!! Form::text('fecha_factura', null, ['class' => 'form-control','id'=>'fecha_factura']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_factura').datetimepicker({
               format: 'YYYY-MM-DD ',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Impuesto 10 Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('impuesto_10', 'Impuesto 10:') !!}
    {!! Form::text('impuesto_10', null, ['class' => 'form-control']) !!}
</div>

<!-- Impuesto 5 Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('impuesto_5', 'Impuesto 5:') !!}
    {!! Form::text('impuesto_5', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub Total Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('sub_total', 'Sub Total:') !!}
    {!! Form::text('sub_total', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Compra Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('total_compra', 'Total Compra:') !!}
    {!! Form::text('total_compra', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Pagado Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('estado_pagado', 'Estado Pagado:') !!}
    {!! Form::text('estado_pagado', null, ['class' => 'form-control']) !!}
</div>

<!-- Borrado Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('borrado', 'Borrado:') !!}
    {!! Form::text('borrado', null, ['class' => 'form-control']) !!}
</div>

<!-- Motivo Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('motivo', 'Motivo:') !!}
    {!! Form::text('motivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('compras.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
