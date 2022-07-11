<!-- Id Cliente Field -->
<div class="form-group">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    <p>{{ $venta->id_cliente }}</p>
</div>

<!-- Id Producto Field -->
<div class="form-group">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <p>{{ $venta->id_producto }}</p>
</div>

<!-- Id Usuario Field -->
<div class="form-group">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    <p>{{ $venta->id_usuario }}</p>
</div>

<!-- Id Contador Factura Field -->
<div class="form-group">
    {!! Form::label('id_contador_factura', 'Id Contador Factura:') !!}
    <p>{{ $venta->id_contador_factura }}</p>
</div>

<!-- Tipo Venta Field -->
<div class="form-group">
    {!! Form::label('tipo_venta', 'Tipo Venta:') !!}
    <p>{{ $venta->tipo_venta }}</p>
</div>

<!-- Tipo Comprobante Field -->
<div class="form-group">
    {!! Form::label('tipo_comprobante', 'Tipo Comprobante:') !!}
    <p>{{ $venta->tipo_comprobante }}</p>
</div>

<!-- Fecha Factura Field -->
<div class="form-group">
    {!! Form::label('fecha_factura', 'Fecha Factura:') !!}
    <p>{{ $venta->fecha_factura }}</p>
</div>

<!-- Iva 5Total Field -->
<div class="form-group">
    {!! Form::label('iva_5total', 'Iva 5Total:') !!}
    <p>{{ $venta->iva_5total }}</p>
</div>

<!-- Iva 10Total Field -->
<div class="form-group">
    {!! Form::label('iva_10total', 'Iva 10Total:') !!}
    <p>{{ $venta->iva_10total }}</p>
</div>

<!-- Sub Total Field -->
<div class="form-group">
    {!! Form::label('sub_total', 'Sub Total:') !!}
    <p>{{ $venta->sub_total }}</p>
</div>

<!-- Total Ventas Field -->
<div class="form-group">
    {!! Form::label('total_ventas', 'Total Ventas:') !!}
    <p>{{ $venta->total_ventas }}</p>
</div>

<!-- Total Ahorro Field -->
<div class="form-group">
    {!! Form::label('total_ahorro', 'Total Ahorro:') !!}
    <p>{{ $venta->total_ahorro }}</p>
</div>

<!-- Borrado Field -->
<div class="form-group">
    {!! Form::label('borrado', 'Borrado:') !!}
    <p>{{ $venta->borrado }}</p>
</div>

<!-- Motivo Field -->
<div class="form-group">
    {!! Form::label('motivo', 'Motivo:') !!}
    <p>{{ $venta->motivo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $venta->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $venta->updated_at }}</p>
</div>

