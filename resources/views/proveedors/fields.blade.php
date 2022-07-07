<!-- Razon Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razon_social', 'Razon Social:') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion_proveedor', 'Direccion Proveedor:') !!}
    {!! Form::text('direccion_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_proveedor', 'Telefono Proveedor:') !!}
    {!! Form::text('telefono_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('proveedors.index') }}" class="btn btn-secondary">Cancel</a>
</div>
