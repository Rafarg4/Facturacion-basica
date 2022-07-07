<!-- Razon Social Field -->
<div class="form-group">
    {!! Form::label('razon_social', 'Razon Social:') !!}
    <p>{{ $proveedor->razon_social }}</p>
</div>

<!-- Direccion Proveedor Field -->
<div class="form-group">
    {!! Form::label('direccion_proveedor', 'Direccion Proveedor:') !!}
    <p>{{ $proveedor->direccion_proveedor }}</p>
</div>

<!-- Telefono Proveedor Field -->
<div class="form-group">
    {!! Form::label('telefono_proveedor', 'Telefono Proveedor:') !!}
    <p>{{ $proveedor->telefono_proveedor }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $proveedor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $proveedor->updated_at }}</p>
</div>

