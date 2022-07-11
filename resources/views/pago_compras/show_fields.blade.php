<!-- Compras Id Compras Field -->
<div class="form-group">
    {!! Form::label('compras_id_compras', 'Compras Id Compras:') !!}
    <p>{{ $pagoCompra->compras_id_compras }}</p>
</div>

<!-- Monto Field -->
<div class="form-group">
    {!! Form::label('monto', 'Monto:') !!}
    <p>{{ $pagoCompra->monto }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pagoCompra->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pagoCompra->updated_at }}</p>
</div>

