<!-- Razon Social Field -->
<div class="form-group">
    {!! Form::label('razon_social', 'Razon Social:') !!}
    <p>{{ $cliente->razon_social }}</p>
</div>

<!-- Ruc Cliente Field -->
<div class="form-group">
    {!! Form::label('ruc_cliente', 'Ruc Cliente:') !!}
    <p>{{ $cliente->ruc_cliente }}</p>
</div>

<!-- Direccion Cliente Field -->
<div class="form-group">
    {!! Form::label('direccion_cliente', 'Direccion Cliente:') !!}
    <p>{{ $cliente->direccion_cliente }}</p>
</div>

<!-- Telefono Cliente Field -->
<div class="form-group">
    {!! Form::label('telefono_cliente', 'Telefono Cliente:') !!}
    <p>{{ $cliente->telefono_cliente }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $cliente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $cliente->updated_at }}</p>
</div>

