<!-- Id Producto Field -->
<div class="form-group">
    {!! Form::label('id_producto', 'Producto:') !!}
    <p>{{ $descuento->producto->nombre_producto}}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $descuento->fecha_inicio }}</p>
</div>

<!-- Fecha Fin Field -->
<div class="form-group">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    <p>{{ $descuento->fecha_fin }}</p>
</div>

<!-- Nombre Promocion Field -->
<div class="form-group">
    {!! Form::label('nombre_promocion', 'Nombre Promocion:') !!}
    <p>{{ $descuento->nombre_promocion }}</p>
</div>

<!-- Precio Descuento Field -->
<div class="form-group">
    {!! Form::label('precio_descuento', 'Precio Descuento:') !!}
    <p>{{ $descuento->precio_descuento }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $descuento->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $descuento->updated_at }}</p>
</div>

