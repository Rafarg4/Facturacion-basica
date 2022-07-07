<!-- Razon Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razon_social', 'Razon Social:') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Ruc Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ruc_cliente', 'Ruc Cliente:') !!}
    {!! Form::text('ruc_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion_cliente', 'Direccion Cliente:') !!}
    {!! Form::text('direccion_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_cliente', 'Telefono Cliente:') !!}
    {!! Form::text('telefono_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancel</a>
</div>
