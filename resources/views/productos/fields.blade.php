<!-- Nombre Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_producto', 'Nombre Producto:') !!}
    {!! Form::text('nombre_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Barra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_barra', 'Codigo Barra:') !!}
    {!! Form::text('codigo_barra', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_producto', 'Descripcion Producto:') !!}
    {!! Form::text('descripcion_producto', null, ['class' => 'form-control']) !!}
</div>
<!-- Id Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_categoria', 'Categoria:') !!}
    {!! Form::select('id_categoria', $categorias,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>
<!-- Id Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_marca', 'Marca:') !!}
    {!! Form::select('id_marca', $marcas,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>
<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::text('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Min Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock_min', 'Stock Min:') !!}
    {!! Form::text('stock_min', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo_producto', 'Costo Producto:') !!}
    {!! Form::number('costo_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidad', 'Unidad:') !!}
    {!! Form::text('unidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Anterior Venta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_anterior_venta', 'Precio Anterior Venta:') !!}
    {!! Form::number('precio_anterior_venta', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Venta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_venta', 'Precio Venta:') !!}
    {!! Form::number('precio_venta', null, ['class' => 'form-control']) !!}
</div>

<!-- Iva 5 Field -->
<div class="form-check col-sm-6">
    {{ Form::label('iva_5', 'Iva 5
:') }}
<br>
    <label>
        {{ Form::radio('iva_5', '1' ) }} Si
    </label>
    <br>
    <label>
        {{ Form::radio('iva_5', '0') }} No
    </label>
</div>

<!-- Iva 10 Field -->
<div class="form-group col-sm-6">
    {{ Form::label('iva_10', 'Iva 10
:') }}
<br>
    <label>
        {{ Form::radio('iva_10', '1') }} Si
    </label>
    <br>
    <label>
        {{ Form::radio('iva_10', '0') }} No
    </label>
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {{ Form::label('estado', 'Estado
:') }}
<br>
    <label>
        {{ Form::radio('estado', '1') }} Activo
    </label>
    <br>
    <label>
        {{ Form::radio('estado', '0') }} Inactivo
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
