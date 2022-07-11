<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_producto', 'Categoria:') !!}
    {!! Form::select('id_producto', $productos,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::text('fecha_inicio', null, ['class' => 'form-control','id'=>'fecha_inicio']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_inicio').datetimepicker({
               format: 'YYYY-MM-DD',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Fecha Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    {!! Form::text('fecha_fin', null, ['class' => 'form-control','id'=>'fecha_fin']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fecha_fin').datetimepicker({
               format: 'YYYY-MM-DD',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Nombre Promocion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_promocion', 'Nombre Promocion:') !!}
    {!! Form::text('nombre_promocion', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Descuento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_descuento', 'Precio Descuento:') !!}
    {!! Form::text('precio_descuento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('descuentos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
