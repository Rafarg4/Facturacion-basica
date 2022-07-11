<div class="table-responsive-sm">
    <table class="table table-striped" id="pagoCompras-table">
        <thead>
            <tr>
        <th>Compras Id Compras</th>
        <th>Monto</th>
               <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pagoCompras as $pagoCompra)
            <tr>
                <td>{{ $pagoCompra->compras_id_compras }}</td>
            <td>{{ number_format($pagoCompra->monto )}}</td>
                <td>
                    {!! Form::open(['route' => ['pagoCompras.destroy', $pagoCompra->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pagoCompras.show', [$pagoCompra->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('pagoCompras.edit', [$pagoCompra->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>