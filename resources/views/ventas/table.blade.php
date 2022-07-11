<div class="table-responsive-sm">
    <table class="table table-striped" id="ventas-table">
        <thead>
            <tr>
                <th>Id Cliente</th>
        <th>Id Producto</th>
        <th>Id Usuario</th>
        <th>Id Contador Factura</th>
        <th>Tipo Venta</th>
        <th>Tipo Comprobante</th>
        <th>Fecha Factura</th>
        <th>Iva 5Total</th>
        <th>Iva 10Total</th>
        <th>Sub Total</th>
        <th>Total Ventas</th>
        <th>Total Ahorro</th>
        <th>Borrado</th>
        <th>Motivo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->id_cliente }}</td>
            <td>{{ $venta->id_producto }}</td>
            <td>{{ $venta->id_usuario }}</td>
            <td>{{ $venta->id_contador_factura }}</td>
            <td>{{ $venta->tipo_venta }}</td>
            <td>{{ $venta->tipo_comprobante }}</td>
            <td>{{ $venta->fecha_factura }}</td>
            <td>{{ $venta->iva_5total }}</td>
            <td>{{ $venta->iva_10total }}</td>
            <td>{{ $venta->sub_total }}</td>
            <td>{{ $venta->total_ventas }}</td>
            <td>{{ $venta->total_ahorro }}</td>
            <td>{{ $venta->borrado }}</td>
            <td>{{ $venta->motivo }}</td>
                <td>
                    {!! Form::open(['route' => ['ventas.destroy', $venta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ventas.show', [$venta->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('ventas.edit', [$venta->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>