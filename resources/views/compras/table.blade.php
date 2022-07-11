<div class="table-responsive-sm">
     <div class="md-card-content" style="overflow-x: auto;">
    <table class="table table-striped" id="compras-table">
        <thead>
            <tr>
        <th>Vendedor</th>
        <th>Proveedor</th>
         <th>Producto</th>
        <th>Tipo Compra</th>
        <th>Timbrando</th>
        <th>Tipo Comprobante</th>
        <th>Numero Factura</th>
        <th>Fecha Inicio</th>
        <th>Fecha Factura</th>
        <th>Impuesto 10</th>
        <th>Impuesto 5</th>
        <th>Sub Total</th>
        <th>Total Compra</th>
        <th>Estado Pagado</th>
        <th>Borrado</th>
        <th>Motivo</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($compras as $compra)
            <tr>
                <td>{{ $compra->id_usuario }}</td>
            <td>{{ $compra->proveedor->razon_social }}</td>
             <td>{{ $compra->producto->nombre_producto }}</td>
            <td>{{ $compra->tipo_compra }}</td>
            <td>{{ $compra->timbrado }}</td>
            <td>{{ $compra->tipo_comprobante }}</td>
            <td>{{ $compra->numero_factura }}</td>
            <td>{{ $compra->fecha_inicio }}</td>
            <td>{{ $compra->fecha_factura }}</td>
            <td>{{ $compra->impuesto_10 }}</td>
            <td>{{ $compra->impuesto_5 }}</td>
            <td>{{ number_format($compra->sub_total )}}</td>
            <td>{{ number_format($compra->total_compra )}}</td>
            <td>{{ $compra->estado_pagado }}</td>
            <td>{{ $compra->borrado }}</td>
            <td>{{ $compra->motivo }}</td>
                <td>
                    {!! Form::open(['route' => ['compras.destroy', $compra->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('compras.show', [$compra->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('compras.edit', [$compra->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>