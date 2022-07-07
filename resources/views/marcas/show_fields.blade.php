<!-- Nombre Marca Field -->
<div class="form-group">
    {!! Form::label('nombre_marca', 'Nombre Marca:') !!}
    <p>{{ $marca->nombre_marca }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $marca->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $marca->updated_at }}</p>
</div>

