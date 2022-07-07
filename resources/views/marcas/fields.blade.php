<!-- Nombre Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_marca', 'Nombre Marca:') !!}
    {!! Form::text('nombre_marca', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('marcas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
