<!-- Compras Id Compras Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compras_id_compras', 'Codigo de compra:') !!}
    {!! Form::select('compras_id_compras', $compras,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Monto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monto', 'Monto:') !!}
    {!! Form::text('monto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pagoCompras.index') }}" class="btn btn-secondary">Cancel</a>
</div>
