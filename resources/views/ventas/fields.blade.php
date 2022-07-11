<!-- Id Usuario Field -->
<div class="form-group col-md-6 pull-left">
<label for="id_usuario">Vendedor:</label>
            <input type="text" name="id_usuario" class="form-control" value="{{ Auth::user()->id }}" readonly>
        </div>

<!-- Id Cliente Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    {!! Form::text('id_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Producto Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    {!! Form::text('id_producto', null, ['class' => 'form-control']) !!}
</div>
<!-- Id Contador Factura Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('id_contador_factura', 'Id Contador Factura:') !!}
    {!! Form::text('id_contador_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Venta Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('tipo_venta', 'Tipo Venta:') !!}
    {!! Form::text('tipo_venta', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Comprobante Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('tipo_comprobante', 'Tipo Comprobante:') !!}
    {!! Form::text('tipo_comprobante', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Factura Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('fecha_factura', 'Fecha Factura:') !!}
    {!! Form::text('fecha_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Iva 5Total Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('iva_5total', 'Iva 5Total:') !!}
    {!! Form::text('iva_5total', null, ['class' => 'form-control']) !!}
</div>

<!-- Iva 10Total Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('iva_10total', 'Iva 10Total:') !!}
    {!! Form::text('iva_10total', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub Total Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('sub_total', 'Sub Total:') !!}
    {!! Form::text('sub_total', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Ventas Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('total_ventas', 'Total Ventas:') !!}
    {!! Form::text('total_ventas', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Ahorro Field -->
<div class="form-group col-sm-2 pull-left">
    {!! Form::label('total_ahorro', 'Total Ahorro:') !!}
    {!! Form::text('total_ahorro', null, ['class' => 'form-control']) !!}
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
<div class="form-group col-sm-12 pull-left">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ventas.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
