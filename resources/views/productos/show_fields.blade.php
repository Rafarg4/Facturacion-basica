<!-- Id Categoria Field -->
<div class="form-group">
    {!! Form::label('id_categoria', 'Categoria:') !!}
    <p>{{ $producto->categoria->nombre_categoria }}</p>
</div>

<!-- Id Marca Field -->
<div class="form-group">
    {!! Form::label('id_marca', 'Marca:') !!}
    <p>{{$producto->categoria->nombre_marca }}</p>
</div>

<!-- Nombre Producto Field -->
<div class="form-group">
    {!! Form::label('nombre_producto', 'Nombre Producto:') !!}
    <p>{{ $producto->nombre_producto }}</p>
</div>

<!-- Codigo Barra Field -->
<div class="form-group">
    {!! Form::label('codigo_barra', 'Codigo Barra:') !!}
    <p>{{ $producto->codigo_barra }}</p>
</div>

<!-- Descripcion Producto Field -->
<div class="form-group">
    {!! Form::label('descripcion_producto', 'Descripcion Producto:') !!}
    <p>{{ $producto->descripcion_producto }}</p>
</div>

<!-- Stock Field -->
<div class="form-group">
    {!! Form::label('stock', 'Stock:') !!}
    <p>{{ $producto->stock }}</p>
</div>

<!-- Stock Min Field -->
<div class="form-group">
    {!! Form::label('stock_min', 'Stock Min:') !!}
    <p>{{ $producto->stock_min }}</p>
</div>

<!-- Costo Producto Field -->
<div class="form-group">
    {!! Form::label('costo_producto', 'Costo Producto:') !!}
    <p>{{ $producto->costo_producto }}</p>
</div>

<!-- Unidad Field -->
<div class="form-group">
    {!! Form::label('unidad', 'Unidad:') !!}
    <p>{{ $producto->unidad }}</p>
</div>

<!-- Precio Anterior Venta Field -->
<div class="form-group">
    {!! Form::label('precio_anterior_venta', 'Precio Anterior Venta:') !!}
    <p>{{ $producto->precio_anterior_venta }}</p>
</div>

<!-- Precio Venta Field -->
<div class="form-group">
    {!! Form::label('precio_venta', 'Precio Venta:') !!}
    <p>{{ $producto->precio_venta }}</p>
</div>

<!-- Iva 5 Field -->
<div class="form-group">
    {!! Form::label('iva_5', 'Iva 5:') !!}
    <p>{{ $producto->iva_5 }}</p>
</div>

<!-- Iva 10 Field -->
<div class="form-group">
    {!! Form::label('iva_10', 'Iva 10:') !!}
    <p>{{ $producto->iva_10 }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $producto->estado }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $producto->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $producto->updated_at }}</p>
</div>

