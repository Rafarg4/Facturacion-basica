<div class="table-responsive-sm">
    <table class="table table-striped" id="productos-table">
        <thead>
            <tr>
        <th>Nombre Producto</th>
        <th>Codigo Barra</th>
        <th>Descripcion Producto</th>
         <th>Categoria</th>
        <th>Marca</th>
        <th>Stock</th>
        <th>Stock Min</th>
        <th>Costo Producto</th>
        <th>Unidad</th>
        <th>Precio Anterior Venta</th>
        <th>Precio Venta</th>
        <th>Iva 5</th>
        <th>Iva 10</th>
        <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
            <td>{{ $producto->nombre_producto }}</td>
            <td>{{ $producto->codigo_barra }}</td>
            <td>{{ $producto->descripcion_producto }}</td>
            <td>{{ $producto->categoria->nombre_categoria}}</td>
            <td>{{ $producto->marca->nombre_marca}}</td>
            <td>{{ $producto->stock }}</td>
            <td>{{ $producto->stock_min }}</td>
            <td>{{ $producto->costo_producto }}</td>
            <td>{{ $producto->unidad }}</td>
            <td>{{ $producto->precio_anterior_venta }}</td>
            <td>{{ $producto->precio_venta }}</td>
            <td>{{ $producto->iva_5 }}</td>
            <td>{{ $producto->iva_10 }}</td>
            <td>{{ $producto->estado }}</td>
                <td>
                    {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$producto->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('productos.edit', [$producto->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>