<!--<button onclick="printHTML()">Print this page</button><script>
function printHTML() {
  if (window.print) {
    window.print();
  }
}
</script>-->
<!-- Id Usuario Field -->
<div class="form-group col-md-6 pull-left ">
    {!! Form::label('id_usuario', 'Vendedor:') !!}
    <p>{{ $compra->id_usuario }}</p>
</div>

<!-- Proveedor Id Field -->
<div class="form-group col-md-6 pull-left ">
    {!! Form::label('proveedor_id', 'Proveedor:') !!}
    <p>{{ $compra->proveedor_id }}</p>
</div>
<!-- Proveedor Id Field -->
<div class="form-group col-md-6 pull-left ">
    {!! Form::label('id_producto', 'Producto:') !!}
    <p>{{ $compra->producto->nombre_producto }}</p>
</div>
<!-- Tipo Compra Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('tipo_compra', 'Tipo Compra:') !!}
    <p>{{ $compra->tipo_compra }}</p>
</div>

<!-- Timbrando Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('timbrando', 'Timbrando:') !!}
    <p>{{ $compra->timbrando }}</p>
</div>

<!-- Tipo Comprobante Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('tipo_comprobante', 'Tipo Comprobante:') !!}
    <p>{{ $compra->tipo_comprobante }}</p>
</div>

<!-- Numero Factura Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('numero_factura', 'Numero Factura:') !!}
    <p>{{ $compra->numero_factura }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $compra->fecha_inicio }}</p>
</div>

<!-- Fecha Factura Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('fecha_factura', 'Fecha Factura:') !!}
    <p>{{ $compra->fecha_factura }}</p>
</div>

<!-- Impuesto 10 Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('impuesto_10', 'Impuesto 10:') !!}
    <p>{{ $compra->impuesto_10 }}</p>
</div>

<!-- Impuesto 5 Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('impuesto_5', 'Impuesto 5:') !!}
    <p>{{ $compra->impuesto_5 }}</p>
</div>

<!-- Sub Total Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('sub_total', 'Sub Total:') !!}
    <p>{{ $compra->sub_total }}</p>
</div>

<!-- Total Compra Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('total_compra', 'Total Compra:') !!}
    <p>{{ $compra->total_compra }}</p>
</div>

<!-- Estado Pagado Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('estado_pagado', 'Estado Pagado:') !!}
    <p>{{ $compra->estado_pagado }}</p>
</div>

<!-- Borrado Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('borrado', 'Borrado:') !!}
    <p>{{ $compra->borrado }}</p>
</div>

<!-- Motivo Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('motivo', 'Motivo:') !!}
    <p>{{ $compra->motivo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $compra->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-2 pull-left">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $compra->updated_at }}</p>
</div>

