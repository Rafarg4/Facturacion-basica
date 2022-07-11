<div class="table-responsive-sm">
    <table class="table table-striped" id="descuentos-table">
        <thead>
            <tr>
        <th>Producto</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Nombre Promocion</th>
        <th>Precio Descuento</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($descuentos as $descuento)
            <tr>
                <td>{{ $descuento->producto->nombre_producto }}</td>
            <td>{{ $descuento->fecha_inicio }}</td>
            <td>{{ $descuento->fecha_fin }}</td>
            <td>{{ $descuento->nombre_promocion }}</td>
            <td>{{ $descuento->precio_descuento }}</td>
                <td>
                    {!! Form::open(['route' => ['descuentos.destroy', $descuento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('descuentos.show', [$descuento->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('descuentos.edit', [$descuento->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>